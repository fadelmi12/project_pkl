<?php

namespace App\Http\Controllers;

use App\Models\DetailTrkMasuk;
use App\Models\Log;
use App\Models\Master;
use App\Models\SupplierModel;
use App\Models\TransaksiKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\TransaksiModel;
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
        $transaksi_masuk = TransaksiModel::all();
        $transaksi_retur = TransaksiModel::all()->where('jenisBarang', '', 'Retur');
        return view('transaksi/transaksi', compact('transaksi_masuk','transaksi_retur' ));
    }

    // Masuk Baru 
    public function addmasukbaru()
    {
        $supplier = SupplierModel::all();
        $barang = Master::where([['status', 'aktif']])->get();
        $transaksi_masuk = TransaksiModel::all();
        // $no_trans = IdGenerator::generate(['table' => 'transaksi_masuk', 'length' => 8, 'prefix' => 'TRK-',date('ym')]);
        $kode = strtoupper(substr('TRK',0,3));
        $check = count(TransaksiModel::where('no_transaksi', 'like', "%$kode%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $no_trans = $kode . "-" . $angka;

        return view('transaksi/addmasukbaru', compact('no_trans','supplier', 'barang', 'transaksi_masuk'));
    }

    public function addmasukbaru2(Request $request)
    {
   
        // dd( $request->kode_barang);
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
    
    // masuk terurr

    public function addmasukretur2(Request $request)
    {
        $jumlah_data = count($request->tgl_transaksi);
        for ($i = 0; $i < $jumlah_data; $i++) {
        TransaksiModel::Insert(
            [
                'tgl_transaksi' => $request->tgl_transaksi[$i],
                'po' => $request->po[$i],
                'nama_barang' => $request->nama_barang[$i],
                'instansi' => $request->instansi[$i],
                'kondisi' => $request->kondisi[$i],
                'penerima' => $request->penerima[$i],
                // 'jenisBarang' => 'Retur'
            ]
        );

        $user = Auth::user();
        Log::create(
            [
            'name' => $user->name,
            'email' => $user->email,
            'divisi' => $user->divisi,
            'deskripsi' => 'Create Masuk Retur',
            'status' => '2',
            'ip'=> $request->ip()

            ]
        );
    }
    return redirect('/transaksi');
}

    public function addmasukretur()
    {
        $supplier = SupplierModel::all();
        $barang = Master::all();
        $transaksi_masuk = TransaksiModel::all();
        return view('transaksi/addmasukretur', compact('supplier', 'barang', 'transaksi_masuk'));
    }

    // public function brgkeluar()
    // {
    //     return view('transaksi/brgkeluar');
    // }
    public function addkeluarbaru()
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
 