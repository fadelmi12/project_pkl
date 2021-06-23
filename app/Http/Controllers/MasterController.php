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
        $barang = Master::all();
        $kategori = kategori::all();
        $jenis = Jenis::all();
        return view('master/addbarang', compact('barang', 'jenis', 'kategori'));
    }


    public function addbarang2(Request $request)
    {
        // dd($request);
        $barang = Master::all();
        $kategori = kategori::all();
        $jenis = Jenis::all();
        $namaFile = time() . '.' . $request->gambar->extension();
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
        return redirect('databrg');
    }

    public function delete($id)
    {
        $barang = Master::where('id_master', $id)->first();
        // dd($barang);
        $barang->delete();

        return redirect('databrg');
    }

    public function deletebarang($id_master)
    {
        // dd($id_master);
        // $data_kategori = Master::find($request->id_master);
        $barang = Master::where('id_master', $id_master)->first();
        // dd($barang);
        $barang->delete();
        //mengirim data_ktg ke view
        return back()->with('success', "Data telah terhapus");
    }

    // DATA KATEGORI
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

    public function editktg()
    {
        return view('master/editktg');
    }




    // DATA JENIS
    public function jenis()
    {
        $data_jenis = jenis::all();
        return view('master/jenis', compact('data_jenis'));
    }

    public function editJenis($id_jenis)
    {

        $data_jenis = Jenis::find($id_jenis);
        return view('master/editjns', compact('data_jenis'));
    }

    public function updateJenis(Request $request)
    {
        Jenis::where('id_jenis', $request->edit_id_jenis)
            ->update([
                'jenis_barang' => $request->edit_jenis,
                'keterangan' => $request->edit_keterangan
            ]);
<<<<<<< HEAD
        return redirect('jenis');
=======
        
        return redirect()->back();
>>>>>>> 91fc19f3a9063d56449bf2c3c08f93fdb6c3b0c2
    }

    public function addjenis2(Request $request)
    {
        Jenis::create([
            'jenis_barang' => $request->jenis_barang,
            'keterangan' => $request->keterangan
        ]);
        return redirect('jenis');
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