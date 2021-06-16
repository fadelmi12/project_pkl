<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jenis;
use App\Models\kategori;

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
    public function submisi(Request $request)
    {
        // dd($request);
        $kategori = kategori::where('id_kategori', $request->id)->first();
        $kategori->kode_kategori = $request->kode;
        $kategori->kategori = $request->nama;
        $kategori->keterangan = $request->keterangan;
    	$kategori->update();

    	return redirect('home');
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

    public function jenis()
    {
        //mengambil data dr tb jenis
        $data_jenis = DB::table('data_jenis')->get();

        //mengirim data_jenis ke view
        return view('master/jenis', ['data_jenis' => $data_jenis]);
    }

    public function jenisUpdate(Request $request)
    {
        $jenis = Jenis::find($request->edit_id_jenis);
        $jenis->id_jenis = $request->edit_id_jenis;
        $jenis->jenis = $request->edit_jenis;
        $jenis->keterangan = $request->edit_keterangan;
        $jenis->save();
        //mengirim data_jenis ke view
        return back()->with('success', "Data telah terupdate");
    }

    public function addjenis2(Request $request)
    {
        Jenis::create([
            'jenis' => $request->jenis,
            'keterangan' => $request->keterangan
        ]);
        // // insert data ke table jenis
        // DB::table('data_jenis')->insert([
        //     'jenis' => $request->jenis,
        //     'keterangan' => $request->keterangan
        // ]);
        // // alihkan halaman ke halaman pegawai
        // return redirect('/jenis');
        return view('master/addjenis');
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
