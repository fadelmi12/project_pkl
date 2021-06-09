<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    public function index()
    {
        return view('master/databrg');
    }

    public function addbarang()
    {
        return view('master/addbarang');
    }

    public function kategori()
    {
        return view('master/kategori');
    }

    public function addkategori()
    {
        return view('master/addkategori');
    }

    public function jenis()
    {
        return view('master/jenis');
    }

    public function addjenis()
    {
        return view('master/addjenis');
    }
}
