<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {

        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->nama;
        $user->save();

        if($user != null) {
         return redirect()->route('profile.index')->with('success','Profil Berhasil di Update');
        } else {
         return redirect()->route('profile.index')->with('error','Profil Gagal di Update');
        }


    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'oldPassword' => 'required',
            'password' => 'required|confirmed',

            ]);

            if(!(Hash::check($request->get('oldPassword'), Auth::user()->password))){

                return redirect()->route('profile.index')->with('error','Password Lama Anda Salah');

            }

            if(strcmp($request->get('oldPassword'), $request->get('password')) == 0){

                return redirect()->route('profile.index')->with('error','Password Lama Anda Tidak Boleh Sama Dengan Password Baru');
            }

            $user = Auth::user();
            $user->password = bcrypt($request->get('password'));
            $user->save();

            return redirect()->route('profile.index')->with('success','Password Anda Berhasil di Ganti');
    }
}
