<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministratorController;

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

Route::get('dashboard/home', function () {
    return view('layout.master');
})->name('home');
// Route::get('/', function () {
//     return view('layout.master');
// })->name('home');


//LOGIN
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('postlogin', [AuthController::class, 'postlogin'])->name('postlogin');;
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth', 'cekdivisi:teknisi,warehouse,marketing,admin,purchasing'], function () {

    Route::get('dashboard/home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // MASTER DATA
    Route::get('databrg', 'App\Http\Controllers\MasterController@index');

    //BARANG
    Route::get('databrg', 'App\Http\Controllers\MasterController@barang');
    Route::get('/databrg/addbarang', 'App\Http\Controllers\MasterController@addbarang');
    // Route::delete('/databrg/delete', 'App\Http\Controllers\MasterController@delete');
    Route::get('databrg/editBarang/{id_master}', [MasterController::class, 'editBarang']);
    Route::put('/updateBarang', 'App\Http\Controllers\MasterController@updateBarang')->name('updateBarang');
    // Route::delete('delete/{id_master}', 'App\Http\Controllers\MasterController@deletebarang');
    // Route::get('master/hapusbrg/{id_master}', [MasterController::class, 'delete'])->name('deletebrg');
    Route::delete('deletebarang/{id_master}', 'App\Http\Controllers\MasterController@deletebarang');
    Route::post('/addbarang2', 'App\Http\Controllers\MasterController@addbarang2')->name('addbarang2');

    //KATEGORI
    Route::get('kategori', 'App\Http\Controllers\MasterController@kategori');
    Route::get('/kategori/addkategori', 'App\Http\Controllers\MasterController@addkategori');
    Route::post('/addkategori2', 'App\Http\Controllers\MasterController@addkategori2')->name('addkategori2');
    Route::get('kategori/editKategori/{id_kategori}', [MasterController::class, 'editKategori']);
    Route::post('/updateKategori', 'App\Http\Controllers\MasterController@updateKategori')->name('updateKategori');
    Route::delete('deletekategori/{id_kategori}', 'App\Http\Controllers\MasterController@deletekategori');

    //JENIS
    Route::get('jenis', 'App\Http\Controllers\MasterController@jenis');
    // Route::put('jenis/update', 'App\Http\Controllers\MasterController@jenisUpdate');
    Route::get('jenis/addjenis', 'App\Http\Controllers\MasterController@addjenis');
    Route::post('/addjenis2', 'App\Http\Controllers\MasterController@addjenis2')->name('addjenis2');
    Route::post('/addbarang2', 'App\Http\Controllers\MasterController@addbarang2')->name('addbarang2');
    Route::get('home', 'App\Http\Controllers\HomeController@index');
    Route::get('jenis/editJenis/{id_jenis}', [MasterController::class, 'editJenis']);
    Route::delete('deletejenis/{id_jenis}', 'App\Http\Controllers\MasterController@deletejenis');
    Route::post('/updateJenis', 'App\Http\Controllers\MasterController@updateJenis')->name('updateJenis');

    // TRANSAKSI
    Route::get('brgmasuk', 'App\Http\Controllers\TransaksiController@brgmasuk');
    Route::get('/brgmasuk/addmasuk', 'App\Http\Controllers\TransaksiController@addmasuk');
    Route::post('/addmasuk2', 'App\Http\Controllers\TransaksiController@addmasuk2')->name('addmasuk2');
    // Route::resource('post', 'App\Http\Controllers\TransaksiController@destroy');
    Route::get('brgkeluar', 'App\Http\Controllers\TransaksiController@brgkeluar');
    Route::get('brgkeluar/addkeluar', 'App\Http\Controllers\TransaksiController@addkeluar');

    // SUPPLIER
    Route::get('supplier', 'App\Http\Controllers\SupplierController@supplier')->name('supplier');
    Route::post('/addSupplier', 'App\Http\Controllers\SupplierController@addSupplier')->name('addSupplier');
    Route::get('supplier', 'App\Http\Controllers\SupplierController@supplier');
    Route::get('supplier/addsupplier', 'App\Http\Controllers\SupplierController@add');
    Route::post('supplier/insert', 'App\Http\Controllers\SupplierController@insert');
    Route::get('supplier/editSup/{id_supplier}', [SupplierController::class, 'editSup']);
    Route::post('/updateSup', 'App\Http\Controllers\SupplierController@updateSup')->name('updateSup');
    Route::delete('deletesupplier/{id_supplier}', 'App\Http\Controllers\SupplierController@deletesupplier');

    // PENGAJUAN
    // Route::get('/brgbaru', 'App\Http\Controllers\PengajuanController@index');
    // Route::get('/brgretur', 'App\Http\Controllers\PengajuanController@index2');
    // PENGAJUAN
    //----------------------------- BARU -----------------------------------------------
    Route::get('/brgbaru', 'App\Http\Controllers\PengajuanController@tabelBaru');
    Route::get('/addbaru', 'App\Http\Controllers\PengajuanController@addbaru');
    Route::post('/addbaru2', 'App\Http\Controllers\PengajuanController@addbaru2')->name('addbaru2');
    Route::get('pengajuan/editBaru/{id_pengajuan}', [PengajuanController::class, 'editBaru']);
    Route::post('/updateBaru', 'App\Http\Controllers\PengajuanController@updateBaru')->name('updateBaru');
    Route::delete('deletebaru/{id_pengajuan}', 'App\Http\Controllers\PengajuanController@deletebaru');
    //----------------------------- RETUR -----------------------------------------------
    Route::get('/brgretur', 'App\Http\Controllers\PengajuanController@tabelRetur');
    Route::get('/addretur', 'App\Http\Controllers\PengajuanController@addretur');
    Route::post('/addretur2', 'App\Http\Controllers\PengajuanController@addretur2')->name('addretur2');
    Route::get('pengajuan/editRetur/{id_pengajuan}', [PengajuanController::class, 'editRetur']);
    Route::post('/updateRetur', 'App\Http\Controllers\PengajuanController@updateRetur')->name('updateRetur');
    Route::delete('deleteretur/{id_pengajuan}', 'App\Http\Controllers\PengajuanController@deleteretur');
        //----------------------------------- confirm//reject ---------------------------------------------------
    Route::post('Confirm/{id_pengajuan}', 'App\Http\Controllers\PengajuanController@Confirm');
    Route::post('Reject/{id_pengajuan}', 'App\Http\Controllers\PengajuanController@Reject'); 

    // PEMINJAMAN
    Route::get('peminjaman', 'App\Http\Controllers\PeminjamanController@index');
    Route::get('peminjaman/addpinjam', 'App\Http\Controllers\PeminjamanController@addpinjam');

    // PO
    Route::get('purchasing', 'App\Http\Controllers\PoController@index');

    // ADMINISTRASI
    Route::get('administrator', 'App\Http\Controllers\AdministratorController@users');
    //Route::get('administrator', 'App\Http\Controllers\AdministratorController@index');
    Route::get('administrator/addadmin', 'App\Http\Controllers\AdministratorController@addadmin');
    Route::post('/addadmin2', 'App\Http\Controllers\AdministratorController@addadmin2')->name('addadmin2');
});
