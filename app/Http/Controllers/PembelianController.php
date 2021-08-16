<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    //
    public function pembelian()
    {
        $pembelian = Pembelian::all()->where('status','!=','');
        return view('pembelian/pembelian', compact('pembelian'));
    }

    public function addinvoice($id_pembelian)
    {
        $data_pembelian = Pembelian::find($id_pembelian);
        return view('pembelian/addinvoice', compact('data_pembelian'));
    }

    public function addpembelian2(Request $request)
    {
        Pembelian::where('id_pembelian', $request->id_pembelian)
        ->update([
            'tglBeli' => $request->tgl_beli,
            'harga' => $request->harga_jual,
            'totalBayar' => $request->harga_beli,
            'status' => $request->jenisTransaksi,
            'sisaBayar' => $request->amount,

        ]);
        return back()->with('success', "Data telah diupdate");
    }

    public function purchase()
    {
        $purchase = Pembelian::all();
        return view('pembelian/purchase', compact('purchase'));
    }

    public function addinvoice()
    {
       
    }
}
