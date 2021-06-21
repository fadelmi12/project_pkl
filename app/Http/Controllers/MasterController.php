<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jenis;
use App\Models\kategori;
use App\Models\Master;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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
        $kategori = kategori::all();
        $jenis = Jenis::all();
        return view('master/addbarang', compact('jenis', 'kategori'));
    }


    public function addbarang2(Request $request)
    {
        // dd($request);
        $barang = Master::all();
        $kategori = kategori::all();
        $jenis = Jenis::all();   
        $namaFile = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('img/logo'), $namaFile);
        
        Master::insert([
            'kode_kategori' => $request->kode_kategori,
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $request->kode_barang,
            'jenis_barang' => $request->jenis_barang,
            'stok' => $request->stok,
            'gambar' => $namaFile,
            'status' => $request->status
        ]);
        return view('master/databrg', compact('barang', 'jenis', 'kategori'));
    }

    public function delete($id)
    {
        $barang = Master::where('id_master', $id)->first();
        // dd($barang);
        $barang->delete();

        return redirect('databrg');

        
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
        $data_kategori = kategori::all();
        return view('master/kategori', compact('data_kategori'));
    }

    public function addkategori()
    {
        return view('master/addkategori');
    }
    public function addkategori2(Request $request)
    {
        Kategori::create([
            'kode_kategori' => $request->kode_kategori,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan
        ]);
        return redirect('kategori');
        // return view('master/addjenis');
    }

    public function ktgUpdate(Request $request)
    {
        $data_kategori = Kategori::find($request->edit_id_ktg);
        $data_kategori->id_kategori = $request->edit_id_ktg;
        $data_kategori->kode_kategori = $request->edit_kode;
        $data_kategori->kategori = $request->edit_kategori;
        $data_kategori->keterangan = $request->edit_keterangan;
        $data_kategori->save();
        //mengirim data_ktg ke view
        return back()->with('success', "Data telah terupdate");
    }

    // DATA JENIS
    public function jenis()
    {
        $data_jenis = jenis::all();
        return view('master/jenis', compact('data_jenis'));
    }

    public function jenisUpdate(Request $request)
    {
        $jenis = Jenis::find($request->edit_id_jenis);
        $jenis->id_jenis = $request->edit_id_jenis;
        $jenis->jenis_barang = $request->edit_jenis_barang;
        $jenis->keterangan = $request->edit_keterangan;
        $jenis->save();
        //mengirim data_jenis ke view
        return back()->with('success', "Data telah terupdate");
    }

    public function addjenis2(Request $request)
    {
        Jenis::create([
            'jenis_barang' => $request->jenis_barang,
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
}
