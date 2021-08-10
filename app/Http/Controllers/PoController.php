<?php

namespace App\Http\Controllers;

use App\Models\PO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoController extends Controller
{
    //
    public function index()
    {
        $data_po = PO::all();
        return view('po/po', compact('data_po'));
    }

    //
    public function addpo()
    {
        return view('po/addpo');
    }

    public function addpo2(Request $request)
    {
        $user = Auth::user();
        PO::create(
            [
                'no_PO' => $request->noPO,
                'namaBarang' => $request->namaBarang,
                'jumlah' => $request->jumlah,
                'keterangan' => $request->keterangan,
                'pic_marketing' => $user->name
            ]
        );
        return redirect('po/po');
    }
}
