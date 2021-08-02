<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    //
    public function pembelian()
    {
        $pembelian = Pembelian::all();
        return view('pembelian/pembelian', compact('pembelian'));
    }

    public function addpembelian($noPO)
    {
        $data_pembelian = Pembelian::find($noPO);
        return view('pembelian/addpembelian', compact('data_pembelian'));
    }
}
