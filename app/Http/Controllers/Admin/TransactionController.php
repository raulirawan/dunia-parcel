<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\TerimaPaket;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {

            if (!empty($request->from_date)) {
                if ($request->from_date === $request->to_date) {
                    $query  = Transaction::query();
                    $query->with(['paket'])
                          ->whereDate('created_at', $request->from_date);
                } else {
                    $query  = Transaction::query();
                    $query->with(['paket'])
                            ->whereBetween('created_at', [$request->from_date.' 00:00:00', $request->to_date.' 23:59:59']);
                }
            } else {
                $today = date('Y-m-d');
                $query  = Transaction::query();
                $query->with(['paket'])
                    ->whereDate('created_at', $today);
            }

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '<a href="'.route('admin.transaction.detail', $item->id).'" class="btn-sm btn-info"><i class="fas fa-eye"></i>Detail</a>';
                })
                ->editColumn('status', function ($item) {
                    if($item->status == 'DELIVERED'){
                        return '<span class="badge badge-success">DELIVERED</span>';
                    } elseif($item->status == 'ON PROGRESS') {
                        return '<span class="badge badge-warning">ON PROGRESS</span>';
                    }elseif($item->status == 'SUDAH BAYAR') {
                        return '<span class="badge badge-success">SUDAH BAYAR</span>';
                    }elseif($item->status == 'PERLU DIAMBIL') {
                        return '<span class="badge badge-warning">PERLU DIAMBIL</span>';
                    }
                    else {
                        return '<span class="badge badge-danger">CANCELLED</span>';
                    }
                })
                ->editColumn('created_at', function ($item) {
                    return $item->created_at;
                })
                ->editColumn('no_resi', function ($item) {
                    return $item->no_resi ?? 'Belum Tersedia';
                })
                ->rawColumns(['action','status'])
                ->make();
        }

        return view('Admin.transaction.index');
    }

    public function transaksiMasukIndex()
    {
        $transaksi = Transaction::whereIn('status',['PENDING','SUDAH BAYAR'])->get();
        return view('Admin.transaction.index-transaksi-masuk', compact('transaksi'));
    }

    public function accept($id)
    {

        $transaction = Transaction::findOrFail($id);
        $keterangan = [];
        $keterangan[] = [
            'pesan' => 'Kurir Sedang Menuju Tempat Pick Up',
            'created_at' => now(),
        ];

        $keterangan = json_encode($keterangan);

        $length = 8;

        $no_resi = 'DN'.substr(str_shuffle("01234565789"), 0, $length);
        $transaction->status = 'PERLU DIAMBIL';
        $transaction->no_resi = $no_resi;
        $transaction->keterangan = $keterangan;
        $transaction->save();

        if($transaction != null)
        {
         return redirect()->route('admin.transaction.masuk.index')->with('success','Data Transaksi Berhasil di Terima');

        } else {
         return redirect()->route('admin.transaction.masuk.index')->with('error','Data Transaksi Gagal di Terima');
        }

    }

    public function reject($id)
    {

        $transaction = Transaction::findOrFail($id);
        $transaction->status = 'CANCELLED';
        $transaction->save();

        if($transaction != null)
        {
         return redirect()->route('admin.transaction.masuk.index')->with('success','Data Transaksi Berhasil di Terima');

        } else {
         return redirect()->route('admin.transaction.masuk.index')->with('error','Data Transaksi Gagal di Terima');
        }

    }


    public function detail($id)
    {
        $transaction = Transaction::findOrFail($id);

        return view('Admin.transaction.detail', compact('transaction'));
    }

    public function addKeterangan(Request $request)
    {
        $transaction = Transaction::findOrFail($request->transaction_id);
        $data_keterangan = [];
        $data_keterangan = json_decode($transaction->keterangan, true);

        $dataPush = [
            'pesan' => $request->keterangan,
            'created_at' => now(),
        ];

        array_push($data_keterangan, $dataPush);

        $transaction->keterangan = $data_keterangan;
        $transaction->save();

        if($data_keterangan != null)
        {
         return redirect()->route('admin.transaction.detail', $request->transaction_id)->with('success','Data Keterangan Berhasil di Update');

        } else {
         return redirect()->route('admin.transaction.detail', $request->transaction_id)->with('error','Data Keterangan Gagal di Update');
        }

    }

    public function updateStatus(Request $request)
    {
        $transaction = Transaction::findOrFail($request->transaction_id);
        $transaction->status = $request->status;
        if($request->status == 'DELIVERED') {
            if($transaction->user_id != null) {
                $data = [
                    'nama_user' => $transaction->user->name,
                    'no_resi' => $transaction->no_resi,
                    'nama_pengirim' => $transaction->nama_pengirim,
                    'nomor_hp_pengirim' => $transaction->nomor_hp_pengirim,
                    'nama_penerima' => $transaction->nama_penerima,
                    'nomor_hp_penerima' => $transaction->nomor_hp_penerima,
                ];
                $data_keterangan = [];
                $data_keterangan = json_decode($transaction->keterangan, true);

                $dataPush = [
                    'pesan' => 'Paket Di Terima Pelanggan',
                    'created_at' => now(),
                ];

                array_push($data_keterangan, $dataPush);

                $transaction->keterangan = $data_keterangan;

                Mail::to($transaction->user)->send(new TerimaPaket($data));
            }
        }
        $transaction->save();


        if($transaction != null)
        {
         return redirect()->route('admin.transaction.detail', $request->transaction_id)->with('success','Status Berhasil di Update');

        } else {
         return redirect()->route('admin.transaction.detail', $request->transaction_id)->with('error','Status Gagal di Update');
        }

    }
}
