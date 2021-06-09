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

Route::get('/', function () {
    return view('layout.master');
});

Route::get('databrg', 'App\Http\Controllers\MasterController@index');
Route::get('kategori', 'App\Http\Controllers\MasterController@kategori');
Route::get('/kategori/addkategori', 'App\Http\Controllers\MasterController@addkategori');
Route::get('/databarang/addbarang', 'App\Http\Controllers\MasterController@addbarang');
Route::get('jenis', 'App\Http\Controllers\MasterController@jenis');
Route::get('jenis/addjenis', 'App\Http\Controllers\MasterController@addjenis');

Route::get('home', 'App\Http\Controllers\HomeController@index');

Route::get('brgmasuk', 'App\Http\Controllers\TransaksiController@brgmasuk');
Route::get('brgmasuk/addmasuk', 'App\Http\Controllers\TransaksiController@addmasuk');
Route::get('brgkeluar', 'App\Http\Controllers\TransaksiController@brgkeluar');

Route::get('supplier', 'App\Http\Controllers\SupplierController@supplier');
Route::get('supplier/addsupplier', 'App\Http\Controllers\SupplierController@add');

Route::get('peminjaman', 'App\Http\Controllers\PeminjamanController@index');
Route::get('peminjaman/addpinjam', 'App\Http\Controllers\PeminjamanController@addpinjam');

Route::get('administrator', 'App\Http\Controllers\AdministratorController@index');
Route::get('administrator/add', 'App\Http\Controllers\AdministratorController@add');
