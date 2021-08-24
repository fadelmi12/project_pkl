<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Master;
use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\TransaksiModel;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Cloner\Data;

class TransaksiController extends Controller
{

    // public function brgmasuk()
    // {
    //     $transaksi_masuk = TransaksiModel::all();
    //     return view('transaksi/addmasukbaru', compact('transaksi_masuk'));
    // }


    public function addmasukbaru()
    {
        $supplier = SupplierModel::all();
        $barang = Master::where([['status', 'aktif']])->get();
        $transaksi_masuk = TransaksiModel::all();
        return view('transaksi/addmasukbaru', compact('supplier', 'barang', 'transaksi_masuk'));
    }
    

    public function addmasukbaru2(Request $request)
    {

        $jumlah_data = count($request->tgl_tarnsaksi);
        for ($i = 0; $i < $jumlah_data; $i++) {
        TransaksiModel::insert(
            [
                'tgl_transaksi' => $request->tgl_transaksi[$i],
                'nama_barang' => $request->nama_barang[$i],
                'nama_supplier' => $request->nama_supplier[$i],
                'jumlah' => $request->jumlah[$i],
                'pengirim' => $request->pengirim[$i],
                'penerima' => $request->penerima[$i],
                // 'jenisBarang' => 'Baru'
            ]
        );
        $user = Auth::user();
        Log::create(
            [
            'name' => $user->name,
            'email' => $user->email,
            'divisi' => $user->divisi,
            'deskripsi' => 'Create Masuk Baru',
            'status' => '2',
            'ip'=> $request->ip()
            ]
        );
    }

        return redirect('/transaksi');
    }
    
    public function addmasukretur2(Request $request)
    {
        $jumlah_data = count($request->nama_barang);
        for ($i = 0; $i < $jumlah_data; $i++) {
        TransaksiModel::create(
            [
                'tgl_transaksi' => $request->tgl_transaksi[$i],
                'po' => $request->po[$i],
                'nama_barang' => $request->nama_barang[$i],
                'instansi' => $request->instansi[$i],
                'kondisi' => $request->kondisi[$i],
                'penerima' => $request->penerima[$i],
                'jenisBarang' => 'Retur'
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

    public function brgkeluar()
    {
        return view('transaksi/brgkeluar');
    }
    public function addkeluar()
    {
        return view('transaksi/addkeluar');
    }

    public function transaksi()
    {
        $transaksi_masuk = TransaksiModel::all();
        $transaksi_retur = TransaksiModel::all()->where('jenisBarang', '', 'Retur');
        return view('transaksi/transaksi', compact('transaksi_masuk','transaksi_retur' ));
    }
}
