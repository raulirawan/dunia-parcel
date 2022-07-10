<?php

namespace App\Http\Controllers;

use App\Paket;
use Exception;
use Midtrans\Snap;
use App\Transaction;
use Midtrans\Config;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengirimanController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        $provinces = Province::all();
        return view('pengiriman-user', compact('provinces','pakets'));
    }

    public function store(Request $request)
    {
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');


        $transaction = new Transaction();
        $keterangan = [];
        $keterangan[] = [
            'pesan' => 'Paket Sampai di Pusat Sortir',
            'created_at' => now(),
        ];

        $keterangan = json_encode($keterangan);

        $kode_transaksi = 'TRX-'.mt_rand(00000,99999);


        $transaction->paket_id = $request->paket_id;
        $transaction->user_id = Auth::user()->id;
        $transaction->kode_transaksi = $kode_transaksi;
        $transaction->provinsi = $request->provinsi;
        $transaction->kota = $request->kota;
        $transaction->kecamatan = $request->kecamatan;
        $transaction->kelurahan = $request->kelurahan;
        $transaction->nama_barang = $request->nama_barang;
        $transaction->jenis_barang = $request->jenis_barang;
        $transaction->berat_barang = $request->berat_barang;
        $transaction->nama_pengirim = $request->nama_pengirim;
        $transaction->nomor_hp_pengirim = $request->nomor_hp_pengirim;
        $transaction->alamat_pengirim = $request->alamat_pengirim;
        $transaction->nama_penerima = $request->nama_penerima;
        $transaction->nomor_hp_penerima = $request->nomor_hp_penerima;
        $transaction->alamat_penerima = $request->alamat_penerima;
        $transaction->status = 'PENDING';
        $transaction->keterangan = $keterangan;
        $transaction->total_harga = $request->total_harga;


        // kirim ke midtrans
        $midtrans_params = [
            'transaction_details' => [
                'order_id' => $kode_transaksi,
                'gross_amount' => (int) $request->total_harga,
            ],

            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
            'callbacks' => [
                'finish' => 'https://duniaparcelexpress.my.id/transaksi',
            ],
            'enable_payments' => ['bca_va','permata_va','bni_va','bri_va','gopay'],
            'vtweb' => [],
        ];

        try {
            //ambil halaman payment midtrans

            $paymentUrl = Snap::createTransaction($midtrans_params)->redirect_url;
            $transaction->save();

            if($transaction != null) {
                // kirim email
                return response()->json([
                    'message' => 'Data Transaksi Berhasil di Buat',
                    'status'  => 'success',
                    'url' => $paymentUrl,
                ]);
            } else {
                return response()->json([
                    'message' => 'Data Transaksi Gagal di Buat, Coba Lagi Ya',
                    'status'  => 'gagal',
                    'url' => url('/pengiriman'),
                ]);
            }
            //reditect halaman midtrans
        } catch (Exception $e) {
            echo $e->getMessage();
            return response()->json([
                'message' => 'Data Transaksi Gagal di Buat, Coba Lagi Ya',
                'status'  => 'gagal',
                'url' => url('/pengiriman'),
            ]);
        }
    }
}
