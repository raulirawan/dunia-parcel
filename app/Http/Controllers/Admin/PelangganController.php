<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('roles','USER')->get();
        return view('Admin.pelanggan.index', compact('data'));
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
        $request->validate(
            [
                'email' => 'unique:users,email',
                'username' => 'unique:users,username'
            ],
            [
                'email.unique' => 'Email Sudah Terdaftar',
                'username.unique' => 'Username Sudah Terdaftar'
            ]
        );
        $data = new User();

        $data->name = $request->nama_pelanggan;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);

        $data->save();

        if($data != null) {
            return redirect()->route('admin.pelanggan.index')->with('success','Data Berhasil di Tambah');
        } else {
            return redirect()->route('admin.pelanggan.index')->with('error','Data Gagal di Tambah');
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
        $request->validate(
            [
                'email_edit' => 'unique:users,email,'.$id,
                'username_edit' => 'unique:users,username,'.$id,
            ],
            [
                'email_edit.unique' => 'Email Sudah Terdaftar',
                'username_edit.unique' => 'Username Sudah Terdaftar'
            ]
        );
        $data = User::findOrFail($id);

        $data->name = $request->nama_pelanggan;
        $data->username = $request->username_edit;
        $data->email = $request->email_edit;
        $data->save();

        if($data != null) {
            return redirect()->route('admin.pelanggan.index')->with('success','Data Berhasil di Update');
        } else {
            return redirect()->route('admin.pelanggan.index')->with('error','Data Gagal di Update');
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
        $data = User::findOrFail($id);

        if($data != null) {
            try {
                $data->delete();
            } catch (Exception $e) {
                return redirect()->route('admin.pelanggan.index')->with('error','Data Tidak Dapat Di Hapus Karena Berelasi Dengan Data lainnya!');
            }
            return redirect()->route('admin.pelanggan.index')->with('success','Data Berhasil di Hapus');
        } else {
            return redirect()->route('admin.pelanggan.index')->with('error','Data Gagal di Hapus');
        }
    }
}
