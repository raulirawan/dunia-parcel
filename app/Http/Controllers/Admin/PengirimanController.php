<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Paket;
use App\Transaction;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        $provinces = Province::all();
        return view('pengiriman', compact('provinces','pakets'));
    }

    public function storePengiriman(Request $request)
    {
        $transaction = new Transaction();
        $keterangan = [];
        $keterangan[] = [
            'pesan' => 'Paket Sampai di Pusat Sortir',
            'created_at' => now(),
        ];
        $kode_transaksi = 'TRX-'.mt_rand(00000,99999);

        $keterangan = json_encode($keterangan);

        $length = 8;

        $no_resi = 'DN'.substr(str_shuffle("01234565789"), 0, $length);

        $transaction->paket_id = $request->paket_id;
        $transaction->no_resi = $no_resi;
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
        $transaction->status = 'ON PROGRESS';
        $transaction->keterangan = $keterangan;
        $transaction->total_harga = $request->total_harga;


        $transaction->save();

        if($transaction != null) {
            // kirim email
            return response()->json([
                'message' => 'Data Transaksi Berhasil di Buat',
                'status'  => 'success',
                'url'     => url('/admin/pengiriman')
            ]);
        } else {
            return response()->json([
                'message' => 'Data Transaksi Gagal di Buat, Coba Lagi Ya',
                'status'  => 'gagal',
                'url' => url('/admin/pengiriman'),
            ]);
        }
    }
}
