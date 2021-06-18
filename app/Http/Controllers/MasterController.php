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
        $barang = Master::all();
        $jenis = Jenis::all();
        return view('master/databrg', compact('barang', 'jenis'));
    }

    public function addbarang()
    {
        return view('master/addbarang');
    }


    // DATA KATEGORI
    public function kategoriUpdate(Request $request)
    {
        $kategori = kategori::find($request->edit_id_kategori);
        $kategori->id_kategori = $request->edit_id_kategori;
        $kategori->kode_kategori = $request->edit_kode;
        $kategori->kategori = $request->edit_nama;
        $kategori->keterangan = $request->edit_keterangan;
        $kategori->save();
        //mengirim data_jenis ke view
        return back()->with('success', "Data telah terupdate");
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
        return redirect('jenis');
        // return view('master/addjenis');
    }

    public function addjenis(Request $request)
    {

        return view('master/addjenis');
    }

    public function jenisDelete($id_jenis)
    {
        // $jenis = Jenis::find($id_jenis);
        // dd($jenis);
        DB::table('data_jenis')->where('id_jenis', $id_jenis)->delete();
        return back()->with('success', 'Data telah terhapus');

        // Jenis::find($id_jenis)->delete();
        // return back()->with('success', 'Data berhasil dihapus');
    }
    public function destroy($id_jenis)
    {
        //fungsi eloquent untuk menghapus data
        Jenis::find($id_jenis)->delete();
        return redirect()->route('jenis')
            ->with('success', 'User Berhasil Dihapus');
    }
}
