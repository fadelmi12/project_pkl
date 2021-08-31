<?php

namespace App\Http\Controllers;

use App\Models\DetailTrkMasuk;
use App\Models\Log;
use App\Models\Master;
use App\Models\SupplierModel;
use App\Models\TransaksiKeluar;
use App\Models\PO;
use App\Models\Instansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\TransaksiModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Cloner\Data;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class TransaksiController extends Controller
{

    // public function brgmasuk()
    // {
    //     $transaksi_masuk = TransaksiModel::all();
    //     return view('transaksi/addmasukbaru', compact('transaksi_masuk'));
    // }
    public function transaksi()
    {
        $transaksi_masuk = TransaksiModel::all()->where('instansi', '', '');
        $transaksi_retur = TransaksiModel::all()->where('nama_supplier', '', '');
        return view('transaksi/transaksi', compact('transaksi_masuk','transaksi_retur' ));
    }

    // Masuk Baru 
    public function addmasukbaru()
    {
        $supplier = SupplierModel::all();
        $barang = Master::where([['status', 'aktif']])->get();
        $transaksi_masuk = TransaksiModel::all();
        // $no_trans = IdGenerator::generate(['table' => 'transaksi_masuk', 'length' => 9, 'prefix' => date('ymd')]);
        
        $now = Carbon::now();
        $thnBln = $now->year . $now->month;
        $kode = strtoupper(substr("TRK", 0, 3));
        // $kode = strtoupper(substr($tanggal, 0, 3));
        $check = count(TransaksiModel::where('no_transaksi', 'like', "%$thnBln%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $noPO = $thnBln . "" . $angka;
        $no_trans =  $kode.  "-"  .$now->year . $now->month . $angka;
        // dd($tanggal);

        return view('transaksi/addmasukbaru', compact('no_trans','supplier', 'barang', 'transaksi_masuk'));
    }

    public function addmasukbaru2(Request $request)
    {
   
        // dd( $request->no_transaksi);
        $jumlah_data = count($request->no_trans);
        for ($i = 0; $i < $jumlah_data; $i++) {
            DetailTrkMasuk::create(
                [
                    'no_transaksi' => $request->no_trans[$i],
                    'jumlah' => $request->jumlah[$i],
                    'kode_barang' => $request->kode_barang[$i],
                    'nama_barang' => $request->nama_barang[$i],
                    'keterangan' => $request->keterangan[$i],
                ]
            );
        }
            TransaksiModel::create(
                [
                    'no_transaksi' => $request->no_transaksi,
                    'nama_supplier' => $request->nama_supplier,
                    'pengirim' => $request->pengirim,
                    'penerima' => $request->penerima,
                ]);
            
            $user = Auth::user();
            Log::create(
                [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Create Masuk Baru',
                'status' => '2',
                'ip'=> $request->ip()
            ]);

        return redirect('/transaksi');
    }

    public function hapus($id,  Request $request){
        $transaksi_masuk = TransaksiModel::where('id', $id)->first();
        // // dd($barang);
        $transaksi_masuk->delete();

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Delete Data Barang',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        // //mengirim data_brg ke view
        return back()->with('success', "Data telah terhapus");
    }
    
    //<!------------masuk returr-----------------------------!>
    public function addmasukretur()
    {
        $transaksi_masuk = TransaksiModel::all()->where('instansi', '', '');
        $transaksi_retur = TransaksiModel::where('instansi', '!=', '')->get();
        $supplier = SupplierModel::all();
        $barang = Master::all();
        $noPO = PO::all();
        $data_instansi = Instansi::all();
        $no_retur = IdGenerator::generate(['table' => 'transaksi_masuk', 'length' => 9, 'prefix' => date('ymd')]);
        return view('transaksi/addmasukretur', compact('data_instansi','no_retur','noPO','supplier', 'barang', 'transaksi_masuk'));
    }

    public function addmasukretur2(Request $request)
    {
        $jumlah_data = count($request->no_retur);
        // dd($request->no_transaksi);
        for ($i = 0; $i < $jumlah_data; $i++) {
            DetailTrkMasuk::create(
                [
                    'no_transaksi' => $request->no_retur[$i],
                    'no_PO' => $request->no_PO[$i],
                    'jumlah' => $request->jumlah[$i],
                    'kode_barang' => $request->kode_barang[$i],
                    'nama_barang' => $request->nama_barang[$i],
                    'keterangan' => $request->keterangan[$i],
                ]
            );
        }
            TransaksiModel::create(
                [
                    'no_transaksi' => $request->no_transaksi,
                    'no_PO' => $request->no_po,
                    'instansi' => $request->instansi,
                    'pengirim' => $request->pengirim,
                    'penerima' => $request->penerima,
                ]);
            
            $user = Auth::user();
            Log::create(
                [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Create Masuk Baru',
                'status' => '2',
                'ip'=> $request->ip()
            ]);

        return redirect('/transaksi');
    } 

    public function brgkeluar()
    {
        return view('transaksi/brgkeluar');
    }
    public function addkeluar()
    {
        return view('transaksi/addkeluarbaru');
    }

    
    public function transaksikeluar()
    {
        $transaksi_masuk = TransaksiKeluar::all();
        $transaksi_retur = TransaksiKeluar::all();
        return view('transaksi/transaksikeluar', compact('transaksi_masuk','transaksi_retur' ));
    }


    public function addkeluarbaru2()
    {
        // $supplier = SupplierModel::all();
        $barang = Master::where([['status', 'aktif']])->get();
        $transaksi_keluar = TransaksiKeluar::all();
        // $no_trans = IdGenerator::generate(['table' => 'transaksi_masuk', 'length' => 8, 'prefix' => 'TRK-',date('ym')]);
        $kode = strtoupper(substr('TRK',0,3));
        $check = count(TransaksiKeluar::where('no_transaksi', 'like', "%$kode%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $no_trans = $kode . "-" . $angka;

        return view('transaksi/addkeluarbaru', compact('no_trans','supplier', 'barang', 'transaksi_keluar'));
    }
}
 