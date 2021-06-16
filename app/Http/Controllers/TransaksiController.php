<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\TransaksiModel;
use Symfony\Component\VarDumper\Cloner\Data;

class TransaksiController extends Controller
{

    public function __construct()
    {
        $this->TransaksiModel = new  TransaksiModel();
    }
    //
    public function brgmasuk()
    {
        $data = [
            'transaksi_masuk'=>$this->TransaksiModel->allData(),
        ];
        return view('transaksi/brgmasuk', $data);
    }
    
    public function destroy($id_transaksi)
    {
       $post = Post::find($id_transaksi);
    
       $post->delete();
    
       return back()->with('success',' Penghapusan berhasil.');
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
