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

    public function addpembelian()
    {
        return view('pembelian/addpembelian');
    }
}
