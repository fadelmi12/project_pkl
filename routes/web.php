<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\PoController;


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

Route::group(['middleware' => 'auth', 'cekdivisi:teknisi,warehouse,marketing,admin,purchasing,administrator'], function () {

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
    // Route::get('brgmasuk', 'App\Http\Controllers\TransaksiController@addmasukbaru');
    Route::get('/addmasukbaru', 'App\Http\Controllers\TransaksiController@addmasukbaru');
    Route::post('/addmasuk2', 'App\Http\Controllers\TransaksiController@addmasukbaru2')->name('addmasuk2');
    Route::post('/addmasukretur2', 'App\Http\Controllers\TransaksiController@addmasukretur2')->name('addmasukretur2');
    // Route::resource('post', 'App\Http\Controllers\TransaksiController@destroy');
    Route::get('/addmasukretur', 'App\Http\Controllers\TransaksiController@addmasukretur');
    Route::get('brgkeluar', 'App\Http\Controllers\TransaksiController@brgkeluar');
    Route::get('brgkeluar/addkeluar', 'App\Http\Controllers\TransaksiController@addkeluar');
    Route::get('transaksi', 'App\Http\Controllers\TransaksiController@transaksi');
    
    Route::get('/transaksi', 'App\Http\Controllers\TransaksiController@transaksi');
    Route::get('/transaksikeluar', 'App\Http\Controllers\TransaksiController@transaksikeluar');

    Route::get('/addkeluarbaru', 'App\Http\Controllers\TransaksiController@addkeluarbaru');


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
    //----------------------------- BARU -----------------------------------------------
    Route::get('/brgbaru', 'App\Http\Controllers\PengajuanController@tabelBaru');
    Route::get('/addbaru', 'App\Http\Controllers\PengajuanController@addbaru');
    Route::post('/addbaru2', 'App\Http\Controllers\PengajuanController@addbaru2')->name('addbaru2');
    Route::get('pengajuan/editBaru/{id_pengajuan}', [PengajuanController::class, 'editBaru']);
    Route::post('/updateBaru', 'App\Http\Controllers\PengajuanController@updateBaru')->name('updateBaru');
    Route::delete('deletebaru/{id_pengajuan}', 'App\Http\Controllers\PengajuanController@deletebaru');
    Route::get('pengajuan/detailbaru/{id_pengajuan}', [PengajuanController::class, 'detailbaru']);

    //----------------------------- RETUR -----------------------------------------------
    Route::get('/brgretur', 'App\Http\Controllers\PengajuanController@tabelRetur');
    Route::get('/addretur', 'App\Http\Controllers\PengajuanController@addretur');
    Route::post('/addretur2', 'App\Http\Controllers\PengajuanController@addretur2')->name('addretur2');
    Route::get('pengajuan/editRetur/{id_pengajuan}', [PengajuanController::class, 'editRetur']);
    Route::get('pengajuan/detailbaru/{id_pengajuan}', [PengajuanController::class, 'detailbaru']);
    Route::post('/updateRetur', 'App\Http\Controllers\PengajuanController@updateRetur')->name('updateRetur');
    Route::delete('deleteretur/{id_pengajuan}', 'App\Http\Controllers\PengajuanController@deleteretur');
    //----------------------------------- confirm//reject ---------------------------------------------------
    Route::post('Confirm/{id_pengajuan}', 'App\Http\Controllers\PengajuanController@Confirm');
    Route::post('Reject/{id_pengajuan}', 'App\Http\Controllers\PengajuanController@Reject');

    //PEMBELIAN
    Route::get('/pembelian', 'App\Http\Controllers\PembelianController@pembelian');
    Route::get('/addinvoice/{id_PO}','App\Http\Controllers\PembelianController@addinvoice');
    Route::get('purchase', 'App\Http\Controllers\PembelianController@purchase');
    Route::post('addpembelian2', 'App\Http\Controllers\PembelianController@addpembelian2');
    Route::post('lunas/{id_pembelian}', 'App\Http\Controllers\PembelianController@lunas');
    



    // PEMINJAMAN
    Route::get('peminjaman', 'App\Http\Controllers\PeminjamanController@peminjaman');
    Route::get('peminjaman/addpinjam', 'App\Http\Controllers\PeminjamanController@addpinjam');
    Route::post('/addpinjam2', 'App\Http\Controllers\PeminjamanController@addpinjam2')->name('addpinjam2');
    Route::get('/peminjaman/editpinjam/{id_peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'editpinjam']);
    // Route::get('peminjaman/editpinjam/{id_peminjaman}', [PeminjamanController::class, 'editpinjam']);
    Route::post('/updatePinjam', 'App\Http\Controllers\PeminjamanController@updatePinjam')->name('updatePinjam');
    Route::delete('deletepinjam/{id_peminjaman}', 'App\Http\Controllers\PeminjamanController@deletepinjam');


    // PO
    Route::get('po', 'App\Http\Controllers\PoController@index');
    Route::get('addpo', 'App\Http\Controllers\PoController@addpo');
    Route::post('/addpo2', 'App\Http\Controllers\PoController@addpo2')->name('addpo2');
    Route::get('po/detail/{no_PO}', 'App\Http\Controllers\PoController@detailpo');
    Route::post('editpo/{id_PO}', 'App\Http\Controllers\PoController@editpo');
    Route::post('confirm/{id_PO}', 'App\Http\Controllers\PoController@confirm');
    Route::post('reject/{id_PO}', 'App\Http\Controllers\PoController@reject');
    Route::post('$detail', 'App\Http\Controllers\PoController@insertCB')->name('insertCB');

    // ADMINISTRASI
    Route::get('administrator', 'App\Http\Controllers\AdministratorController@users');
    Route::get('log', 'App\Http\Controllers\AdministratorController@log');
    Route::get('administrator/addadmin', 'App\Http\Controllers\AdministratorController@addadmin');
    Route::post('/addadmin2', 'App\Http\Controllers\AdministratorController@addadmin2')->name('addadmin2');

    
    // Instansi
    Route::get('instansi', 'App\Http\Controllers\InstansiController@instansiview');
    Route::get('instansi', 'App\Http\Controllers\InstansiController@instansi')->name('instansi');
    Route::post('/addInstansi', 'App\Http\Controllers\InstansiController@addInstansi')->name('addInstansi');
    Route::post('/addInstansi2', 'App\Http\Controllers\InstansiController@addInstansi')->name('addInstansi2');
    Route::get('instansi/addinstansi', 'App\Http\Controllers\InstansiController@add');
    Route::get('instansi/editInstansi/{id_instansi}','App\Http\Controllers\InstansiController@editInstansi');
    Route::post('/updateInstansi', 'App\Http\Controllers\InstansiController@updateInstansi')->name('updateInstansi');
    Route::delete('deleteinstansi/{id_instansi}', 'App\Http\Controllers\InstansiController@deleteinstansi');
});
