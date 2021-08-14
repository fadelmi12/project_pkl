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

        // $kode = strtoupper(substr($request->tgl_transaksi, 0, 10));
        // $check = count(TransaksiModel::where('no_transaksi', 'like', "%$kode%")->get()->toArray());
        // $angka = sprintf("%03d", (int)$check + 1);
        // $no_transaksi = "TM-" . $kode . "-" . $angka;

        // $jumlah_data = count($request->nama_barang);
        // for ($i = 0; $i < $jumlah_data; $i++) {

        //     TransaksiModel::create([
        //         'no_transaksi' => $no_transaksi,
        //         'tgl_transaksi' => $request->tgl_transaksi[$i],
        //         'jns_transaksi' => $request->jns_transaksi[$i],
        //         'nama_supplier' => $request->nama_supplier[$i],
        //         'nama_barang' => $request->nama_barang[$i],
        //         'jumlah' => $request->jumlah[$i],
        //         'kondisi' => $request->kondisi[$i],
        //         'pengirim' => $request->pengirim[$i],
        //         'penerima' => $request->penerima[$i],
        //     ]);
        // }
        $jumlah_data = count($request->nama_barang);
        for ($i = 0; $i < $jumlah_data; $i++) {
        TransaksiModel::create(
            [
                'tgl_transaksi' => $request->tgl_transaksi[$i],
                'nama_barang' => $request->nama_barang[$i],
                'nama_supplier' => $request->nama_supplier[$i],
                'jumlah' => $request->jumlah[$i],
                'pengirim' => $request->pengirim[$i],
                'penerima' => $request->penerima[$i],
                'jenisBarang' => 'Baru'
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
        $transaksi_masuk = TransaksiModel::all()->where('jenisBarang', '', 'Baru');
        $transaksi_retur = TransaksiModel::all()->where('jenisBarang', '', 'Retur');
        return view('transaksi/transaksi', compact('transaksi_masuk','transaksi_retur' ));
    }
}
