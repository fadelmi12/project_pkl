<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    public function brgmasuk()
    {
        return view('transaksi/brgmasuk');
    }

    public function addmasuk()
    {
        return view('transaksi/addmasuk');
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
