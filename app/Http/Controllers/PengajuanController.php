<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    //
    public function index()
    {
        return view('pengajuan/brgbaru');
    }

    public function index2()
    {
        return view('pengajuan/brgretur');
    }
}
