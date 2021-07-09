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

        $kode = strtoupper(substr($request->nama_barang, 0, 3));
        $check = count(Master::where('kode_barang', 'like', "%$kode%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $kode_barang = $kode . "" . $angka;

        Master::insert([
            'kode_kategori' => $request->kode_kategori,
            'nama_barang' => $request->nama_barang,
            'kode_barang' => $kode_barang,
            'jenis_barang' => $request->jenis_barang,
            'stok' => $request->stok,
            'gambar' => $namaFile,
            'status' => $request->status
        ]);
        return redirect('databrg');
    }

    public function editBarang($id_master)
    {

        $brg = Master::find($id_master);
        return view('master/editbrg', compact('brg'));
    }

    public function updateBarang(Request $request)
    {
        Master::where('id_master', $request->edit_id_brg)
            ->update([
                'kode_kategori' => $request->edit_kode_kategori,
                'nama_barang' => $request->edit_nama_barang,
                'kode_barang' => $request->edit_kode_barang,
                'jenis_barang' => $request->edit_jenis_barang,
                'kode_kategori' => $request->edit_kode_kategori,
                'stok' => $request->edit_stok,
                'gambar' => $request->edit_kode_kategori,
                'status' => $request->edit_status
            ]);
        return redirect('databrg');

        return redirect()->back();
    }

    public function deletebrg($id_master)
    {
        // dd($id_master);
        // $data_kategori = Master::find($request->id_master);
        $brg = Master::find($id_master);
        // dd($barang);
        // $barang->delete();
        //mengirim data_ktg ke view
        return view('master/databrg', compact('brg'));

        // return back()->with('success', "Data telah terhapus");
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
        $kode = strtoupper(substr("KTG", 0, 3));
        $check = count(Kategori::where('kode_kategori', 'like', "%$kode%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $kode_kategori = $kode . "" . $angka;

        Kategori::create([
            'kode_kategori' => $kode_kategori,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan
        ]);
        return redirect('kategori');
        // return view('master/addjenis');
    }

    public function editKategori($id_kategori)
    {

        $data_kategori = Kategori::find($id_kategori);
        return view('master/editktg', compact('data_kategori'));
    }

    public function updateKategori(Request $request)
    {
        Kategori::where('id_kategori', $request->edit_id_ktg)
            ->update([
                'kode_kategori' => $request->edit_kode,
                'kategori' => $request->edit_kategori,
                'keterangan' => $request->edit_keterangan
            ]);
        return redirect('kategori');

        return redirect()->back();
    }

    public function deletekategori($id_kategori)
    {
        // dd($id_jenis);
        // dd($id_master);
        // $data_kategori = Master::find($request->id_master);
        $kategori = Kategori::where('id_kategori', $id_kategori)->first();
        // // dd($barang);
        $kategori->delete();
        // //mengirim data_ktg ke view
        return back()->with('success', "Data telah terhapus");
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
        return redirect('jenis');

        return redirect()->back();
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

    public function deletejenis($id_jenis)
    {
        // dd($id_jenis);
        // dd($id_master);
        // $data_kategori = Master::find($request->id_master);
        $jenis = Jenis::where('id_jenis', $id_jenis)->first();
        // // dd($barang);
        $jenis->delete();
        // //mengirim data_ktg ke view
        return back()->with('success', "Data telah terhapus");
    }
}
