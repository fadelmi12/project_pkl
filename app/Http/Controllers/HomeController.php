<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Master;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $nama_barang = Master::pluck('nama_barang');
        $stok = Master::pluck('stok');
        return view('dashboard/home', compact(['nama_barang', 'stok']));
    }

    public function PieChart()
    {
        $result = DB::select(DB::raw("select count(*) as stok, nama_barang from master_data group by nama_barang"));
        // dd($result);
        $chartData = "";
        foreach ($result as $list) {
            $chartData .= "['" . $list->nama_barang . "',  " . $list->stok . "],";
        }
        $chartData = rtrim($chartData, ",");
        echo $chartData;
        // return view('dashboard/home');


    }
}
