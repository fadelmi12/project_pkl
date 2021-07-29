<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\TransaksiModel;
use Symfony\Component\VarDumper\Cloner\Data;

class TransaksiController extends Controller
{

    public function brgmasuk()
    {
        $transaksi_masuk = TransaksiModel::all();
        return view('transaksi/brgmasuk', compact('transaksi_masuk'));
    }


    public function addmasuk()
    {
        $supplier = SupplierModel::all();
        $barang = Master::all();
        return view('transaksi/addmasuk', compact('supplier', 'barang'));
    }

    public function addmasuk2(Request $request)
    {
        TransaksiModel::create([
            'no_transaksi' => $request->no_transaksi,
            'jns_transaksi' => $request->jns_transaksi,
            'tgl_transaksi' => $request->tgl_transaksi,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'nama_supplier' => $request->nama_supplier,
            'pengirim' => $request->pengirim,
            'nama_barang' => $request->nama_barang,
            'penerima' => $request->penerima,
        ]);
        return redirect('brgmasuk');
    }

    public function brgkeluar()
    {
        return view('transaksi/brgkeluar');
    }
    public function addkeluar()
    {
        return view('transaksi/addkeluar');
    }
}
