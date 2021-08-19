<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Pembelian;
use App\Models\PO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembelianController extends Controller
{
    //
    public function pembelian()
    {
        $lunas = Pembelian::all()->where('status','!=','hutang');
        $hutang = Pembelian::all()->where('status','','hutang');
        return view('pembelian/pembelian', compact('lunas','hutang'));
    }

    public function addinvoice($id_PO)
    {
        $data_pembelian = PO::find($id_PO);
        return view('pembelian/addinvoice', compact('data_pembelian'));
    }

    public function addpembelian2(Request $request)
    {
        Pembelian::create([
            'no_PO' => $request->no_PO,
            'namaBarang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'tglBeli' => $request->tgl_beli,
            'harga' => $request->harga_jual,
            'supplier' => $request->supplier,
            'totalBayar' => $request->harga_beli,
            'status' => $request->jenisTransaksi,
            'sisaBayar' => $request->amount
        ]);
        PO::where('id_PO', $request->id_PO)
                ->update([
                    'status' => '5'
                ]);
        $user = Auth::user();
        Log::create(
            [
            'name' => $user->name,
            'email' => $user->email,
            'divisi' => $user->divisi,
            'deskripsi' => '',
            'status' => '2',
            'ip'=> $request->ip()

            ]
        );
        // return view('pembelian/purchase');
        return back()->with('success', "Data telah dibuat");
    }

    public function purchase()
    {
        $purchase = PO::all()->where('status','=','4');
        return view('pembelian/purchase', compact('purchase'));
    }
  
    public function lunas(Request $request)
    {
        Pembelian::where('id_pembelian',$request->id_pembelian)
                        ->update([
                            'status'=> $request->status
                        ]);
        return back()->with('success', "data telah dilunasi");
    }
}
