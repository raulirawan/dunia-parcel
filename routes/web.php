<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
});
Route::get('/regencies', 'CountryController@regencies');
Route::get('/districts', 'CountryController@districts');
Route::get('/village', 'CountryController@villages');

Route::get('/','HomeController@index')->name('home.index');
// Route::get('/cek-resi','HomeController@cekResi')->name('check.resi');
Route::get('/cek-resi','HomeController@cekResi')->name('check.resi');

Route::middleware(['auth'])->group(function () {

    Route::get('pengiriman','PengirimanController@index')->name('pengiriman.index');
    Route::post('pengiriman','PengirimanController@store')->name('pengiriman.store');


    Route::get('profile','ProfileController@index')->name('profile.index');
    Route::post('profile/update','ProfileController@update')->name('profile.update');
    Route::post('profile/update/password','ProfileController@updatePassword')->name('profile.update.password');

    Route::get('transaksi','TransactionController@index')->name('transaction.index');
});

Route::prefix('petugas')->middleware(['auth'])->group(function () {
    Route::get('dashboard','Petugas\DashboardController@index')->name('petugas.dashboard.index');
    Route::get('paket','Petugas\PaketController@index')->name('petugas.paket.index');
    Route::get('paket/pick-up/{id}','Petugas\PaketController@pickUp')->name('petugas.paket.pick.up.index');



});

Route::prefix('admin')->middleware(['admin','auth'])->group(function () {
    Route::get('dashboard','Admin\DashboardController@index')->name('admin.dashboard.index');

    // Pelanggan
    Route::get('pelanggan','Admin\PelangganController@index')->name('admin.pelanggan.index');
    Route::post('pelanggan/store','Admin\PelangganController@store')->name('admin.pelanggan.store');
    Route::post('pelanggan/update/{id}','Admin\PelangganController@update')->name('admin.pelanggan.update');
    Route::post('pelanggan/delete/{id}','Admin\PelangganController@delete')->name('admin.pelanggan.delete');

     // Paket
     Route::get('paket','Admin\PaketController@index')->name('admin.paket.index');
     Route::post('paket/store','Admin\PaketController@store')->name('admin.paket.store');
     Route::post('paket/update/{id}','Admin\PaketController@update')->name('admin.paket.update');
     Route::post('paket/delete/{id}','Admin\PaketController@delete')->name('admin.paket.delete');

    Route::get('pengiriman','Admin\PengirimanController@index')->name('admin.pengiriman.index');
    Route::post('pengiriman','Admin\PengirimanController@storePengiriman')->name('admin.pengiriman.index.store');

    Route::get('transaction','Admin\TransactionController@index')->name('admin.transaction.index');
    Route::get('transaction/masuk','Admin\TransactionController@transaksiMasukIndex')->name('admin.transaction.masuk.index');
    Route::get('transaction/detail/{id}','Admin\TransactionController@detail')->name('admin.transaction.detail');

    // terima transaksi
    Route::get('transaction/accept/{id}','Admin\TransactionController@accept')->name('admin.transaction.accept');
    Route::get('transaction/reject/{id}','Admin\TransactionController@reject')->name('admin.transaction.reject');

    Route::post('transaction/add/keterangan','Admin\TransactionController@addKeterangan')->name('admin.transaction.add.keterangan');
    Route::post('transaction/update/status','Admin\TransactionController@updateStatus')->name('admin.transaction.update.status');



});



// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/midtrans/callback', 'MidtransController@callback')->name('midtrans.callback');
