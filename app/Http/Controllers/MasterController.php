<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jenis;
use App\Models\kategori;
use App\Models\Master;

class MasterController extends Controller
{
    //
   public function index()
    {
        return view('master/databrg');
    }

    public function barang()
    {
        $barang = master::all();
        return view('master/databrg', compact('databrg'));
    }

    public function addbarang()
    {
        return view('master/addbarang');
    }

    // DATA KATEGORI
    public function editSubmisi(Request $request)
    {
        // dd($request);
        $kategori = kategori::where('id_kategori', $request->id)->first();
        $kategori->kode_kategori = $request->kode;
        $kategori->kategori = $request->nama;
        $kategori->keterangan = $request->keterangan;
        $kategori->update();

        return redirect('kategori');
    }
    public function kategori()
    {
        $kategori = kategori::all();
        return view('master/kategori', compact('kategori'));
    }

    public function addkategori()
    {
        return view('master/addkategori');
    }

    // DATA JENIS
    public function jenis()
    {
        // //mengambil data dr tb jenis
        // $data_jenis = DB::table('data_jenis')->get();
        // //mengirim data_jenis ke view
        // return view('master/jenis', ['data_jenis' => $data_jenis]);

        $data_jenis = jenis::all();
        return view('master/jenis', compact('data_jenis'));
    }

    public function jenisUpdate(Request $request)
    {
        // dd($request);
        $data_jenis = jenis::where('id_jenis', $request->id)->first();
        $data_jenis->jenis = $request->jenis;
        $data_jenis->keterangan = $request->keterangan;
        $data_jenis->update();

        return redirect('jenis');
    }

    public function addjenis2(Request $request)
    {
        Jenis::create([
            'jenis' => $request->jenis,
            'keterangan' => $request->keterangan
        ]);
        return redirect('jenis');
        // return view('master/addjenis');
    }

    public function addjenis(Request $request)
    {

        return view('master/addjenis');
    }

    public function JenisDelete($id_jenis)
    {
        // $jenis = Jenis::find($id_jenis);
        // dd($jenis);
        DB::table('data_jenis')->where('id_jenis', $id_jenis)->delete();
        return back()->with('success', 'Data telah terhapus');

        // Jenis::find($id_jenis)->delete();
        // return back()->with('success', 'Data berhasil dihapus');
    }
}
