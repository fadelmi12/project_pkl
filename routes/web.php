<?php

use App\Http\Controllers\MasterController;
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
})->name('home');

// MASTER DATA
Route::get('databrg', 'App\Http\Controllers\MasterController@index');

//KATEGORI

Route::get('databrg', 'App\Http\Controllers\MasterController@barang');
Route::post('/addkategori2', 'App\Http\Controllers\MasterController@addkategori2')->name('addkategori2');


//KATEGORI
Route::get('databrg', 'App\Http\Controllers\MasterController@barang');
Route::get('kategori', 'App\Http\Controllers\MasterController@kategori');
Route::get('/kategori/addkategori', 'App\Http\Controllers\MasterController@addkategori');
Route::put('kategori/update', 'App\Http\Controllers\MasterController@ktgUpdate');
Route::get('/databrg/addbarang', 'App\Http\Controllers\MasterController@addbarang');
//JENIS
Route::get('jenis', 'App\Http\Controllers\MasterController@jenis');
// Route::put('jenis/update', 'App\Http\Controllers\MasterController@jenisUpdate');
Route::get('jenis/addjenis', 'App\Http\Controllers\MasterController@addjenis');
Route::get('/jenis/delete/{id_jenis}', 'App\Http\Controllers\MasterController@JenisDelete');
Route::post('/addjenis2', 'App\Http\Controllers\MasterController@addjenis2')->name('addjenis2');
Route::post('/addbarang2', 'App\Http\Controllers\MasterController@addbarang2')->name('addbarang2');
Route::get('home', 'App\Http\Controllers\HomeController@index');
Route::get('jenis/editJenis/{id_jenis}', [MasterController::class, 'editJenis']);
Route::post('jenis/updateJenis/{id_jenis}', [MasterController::class, 'updateJenis']);
// Route::post('/updateJenis', 'App\Http\Controllers\MasterController@updateJenis')->name('updateJenis');


// TRANSAKSI
Route::get('brgmasuk', 'App\Http\Controllers\TransaksiController@brgmasuk');
Route::get('brgmasuk/addmasuk', 'App\Http\Controllers\TransaksiController@addmasuk');
// Route::get('brgmasuk/delete/{id_transaksi}', 'App\Http\Controllers\TransaksiController@delete');
Route::resource('post', 'App\Http\Controllers\TransaksiController@destroy');
Route::get('brgkeluar', 'App\Http\Controllers\TransaksiController@brgkeluar');
Route::get('brgkeluar/addkeluar', 'App\Http\Controllers\TransaksiController@addkeluar');

// SUPPLIER
Route::get('supplier', 'App\Http\Controllers\SupplierController@supplier')->name('supplier');
Route::post('/addSupplier', 'App\Http\Controllers\SupplierController@addSupplier')->name('addSupplier');


Route::get('supplier', 'App\Http\Controllers\SupplierController@supplier');
Route::get('supplier/addsupplier', 'App\Http\Controllers\SupplierController@add');
Route::post('supplier/insert', 'App\Http\Controllers\SupplierController@insert');
Route::put('supplier/update', 'App\Http\Controllers\SupplierController@supplierUpdate');


// PENGAJUAN
Route::get('/brgbaru', 'App\Http\Controllers\PengajuanController@index');
Route::get('/brgretur', 'App\Http\Controllers\PengajuanController@index2');

// PEMINJAMAN
Route::get('peminjaman', 'App\Http\Controllers\PeminjamanController@index');
Route::get('peminjaman/addpinjam', 'App\Http\Controllers\PeminjamanController@addpinjam');

// PO
Route::get('purchasing', 'App\Http\Controllers\PoController@index');

// ADMINISTRASI
Route::get('administrator', 'App\Http\Controllers\AdministratorController@index');
Route::get('administrator/add', 'App\Http\Controllers\AdministratorController@add');
