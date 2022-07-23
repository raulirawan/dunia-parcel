<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $transaction = Transaction::where('status', 'PERLU DIAMBIL')->orderBy('created_at','DESC')->get();
        return view('Petugas.paket.index', compact('transaction'));
    }

    public function pickUp($id)
    {
        $transaction = Transaction::findOrFail($id);
        $data_keterangan = [];
        $data_keterangan = json_decode($transaction->keterangan, true);

        $dataPush = [
            'pesan' => 'Barang Sudah Di Ambil Kurir',
            'created_at' => now(),
        ];

        array_push($data_keterangan, $dataPush);

        $transaction->status = 'ON PROGRESS';
        $transaction->keterangan = $data_keterangan;
        $transaction->save();

        if($transaction != null) {
            return redirect()->route('petugas.paket.index')->with('success','Barang di Pick Up');
        } else {
            return redirect()->route('petugas.paket.index')->with('error','Barang Gagal Pick Up');
        }

    }
}
