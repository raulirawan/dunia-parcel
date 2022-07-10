<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $delivered = Transaction::where('status','DELIVERED')->count();
        $onProgress = Transaction::where('status','ON PROGRESS')->count();
        $pending = Transaction::where('status','PENDING')->count();
        $cancelled = Transaction::where('status','CANCELLED')->count();
        return view('Admin.dashboard', compact('delivered','onProgress','cancelled','pending'));
    }
}
