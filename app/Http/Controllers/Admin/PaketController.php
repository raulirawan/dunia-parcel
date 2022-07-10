<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Paket::all();
        return view('Admin.paket.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Paket();

        $data->nama_paket = $request->nama_paket;
        $data->harga = $request->harga;

        $data->save();

        if($data != null) {
            return redirect()->route('admin.paket.index')->with('success','Data Berhasil di Tambah');
        } else {
            return redirect()->route('admin.paket.index')->with('error','Data Gagal di Tambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Paket::findOrFail($id);

        $data->nama_paket = $request->nama_paket;
        $data->harga = $request->harga;

        $data->save();

        if($data != null) {
            return redirect()->route('admin.paket.index')->with('success','Data Berhasil di Update');
        } else {
            return redirect()->route('admin.paket.index')->with('error','Data Gagal di Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Paket::findOrFail($id);

        if($data != null) {
            $data->delete();
            return redirect()->route('admin.paket.index')->with('success','Data Berhasil di Hapus');
        } else {
            return redirect()->route('admin.paket.index')->with('error','Data Gagal di Hapus');
        }
    }
}
