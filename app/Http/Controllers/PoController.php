<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoController extends Controller
{
    //
    public function index()
    {
        return view('po/po');
    }
}
