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
        // $transaksi_masuk = TransaksiModel::all();
        return view('transaksi/addmasuk', compact('supplier', 'barang'));
    }

    public function addmasuk2(Request $request)
    {


        $kode = strtoupper(substr($request->tgl_transaksi, 0, 4));
        $check = count(TransaksiModel::where('no_transaksi', 'like', "%$kode%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $char = "TRK-";
        $no_transaksi = $char . $kode . "-" . $angka;

        // $kode = strtoupper(substr("SUPPLIER", 0, 3));
        // $check = count(SupplierModel::where('kode_supplier', 'like', "%$kode%")->get()->toArray());
        // $angka = sprintf("%03d", (int)$check + 1);
        // $kode_supplier = $kode . "" . $angka;

        TransaksiModel::create([
            'no_transaksi' => $no_transaksi,
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
