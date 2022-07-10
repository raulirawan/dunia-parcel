<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Whoops\Run;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function cekResi(Request $request)
    {
        $transaction = Transaction::where('no_resi', $request->no_resi)->firstOrFail();
        return view('cek-resi', compact('transaction'));
    }
}
