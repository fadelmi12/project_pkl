<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jenis;
use App\Models\kategori;
use App\Models\Log;
use App\Models\Master;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
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
        $rules = [
            'nama_barang' => 'required',
        ];

        $messages = [
            'nama_barang.required' => '*Nama barang tidak boleh kosong',
        ];
        $this->validate($request, $rules, $messages);

        if ($request->gambar) {
            $namaFile = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img/logo'), $namaFile);

            $kode = strtoupper(substr($request->nama_barang, 0, 3));
            $check = count(Master::where('kode_barang', 'like', "%$kode%")->get()->toArray());
            $angka = sprintf("%03d", (int)$check + 1);
            $kode_barang = $kode . "" . $angka;

            Master::create([
                'kode_kategori' => $request->kode,
                'nama_barang' => $request->nama_barang,
                'kode_barang' => $kode_barang,
                // 'jenis_barang' => $request->jenis_barang,
                'stok' => $request->stok,
                'gambar' => $namaFile,
                'status' => $request->status
            ]);
        } else {

            $kode = strtoupper(substr($request->nama_barang, 0, 3));
            $check = count(Master::where('kode_barang', 'like', "%$kode%")->get()->toArray());
            $angka = sprintf("%03d", (int)$check + 1);
            $kode_barang = $kode . "" . $angka;

            Master::create([
                'kode_kategori' => $request->kode,
                'nama_barang' => $request->nama_barang,
                'kode_barang' => $kode_barang,
                // 'jenis_barang' => $request->jenis_barang,
                'status' => $request->status
            ]);

            $user = Auth::user();
            Log::create(
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'divisi' => $user->divisi,
                    'deskripsi' => 'Update Data Barang',
                    'status' => '2',
                    'ip' => $request->ip()

                ]
            );
        }
        return redirect('databrg');

        // dd($request);
        // $barang = Master::all();
        // $kategori = kategori::all();
        // $jenis = Jenis::all();
        // $namaFile = time() . '.' . $request->gambar->extension();
        // $request->gambar->move(public_path('img/logo'), $namaFile);

        // $kode = strtoupper(substr($request->nama_barang, 0, 3));
        // $check = count(Master::where('kode_barang', 'like', "%$kode%")->get()->toArray());
        // $angka = sprintf("%03d", (int)$check + 1);
        // $kode_barang = $kode . "" . $angka;

        // Master::create([
        //     'kode_kategori' => $request->kode,
        //     'nama_barang' => $request->nama_barang,
        //     'kode_barang' => $kode_barang,
        //     'jenis_barang' => $request->jenis_barang,
        //     'stok' => $request->stok,
        //     'gambar' => $namaFile,
        //     'status' => $request->status
        // ]);

        // $user = Auth::user();
        // Log::create(
        //     [
        //         'name' => $user->name,
        //         'email' => $user->email,
        //         'divisi' => $user->divisi,
        //         'deskripsi' => 'Create Data Barang',
        //         'status' => '2',
        //         'ip' => $request->ip()

        //     ]
        // );
        // return redirect('databrg');
    }

    public function editBarang($id_master)
    {

        $brg = Master::find($id_master);
        // $barang = Master::all();
        $kategori = kategori::all();
        $jenis = Jenis::all();
        return view('master/editbrg', compact('brg', 'kategori', 'jenis'));
    }

    public function updateBarang(Request $request)
    {
        $rules = [
            'edit_nama_barang' => 'required',
            // 'edit_stok' => 'required'
        ];

        $messages = [
            'edit_nama_barang.required' => 'Nama barang tidak boleh kosong',
            // 'edit_stok.required' => 'Stok tidak boleh kosong'

        ];
        $this->validate($request, $rules, $messages);



        if ($request->gambar) {
            $namaFile = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img/logo'), $namaFile);

            Master::where('id_master', $request->edit_id_brg)
                ->update([
                    'kode_kategori' => $request->edit_kode_kategori,
                    'nama_barang' => $request->edit_nama_barang,
                    'kode_barang' => $request->edit_kode_barang,
                    // 'jenis_barang' => $request->edit_jenis_barang,
                    'kode_kategori' => $request->edit_kode_kategori,
                    'stok' => $request->edit_stok,
                    'gambar' => $namaFile,
                    'status' => $request->edit_status
                ]);
        } else {

            Master::where('id_master', $request->edit_id_brg)
                ->update([
                    'kode_kategori' => $request->edit_kode_kategori,
                    'nama_barang' => $request->edit_nama_barang,
                    'kode_barang' => $request->edit_kode_barang,
                    // 'jenis_barang' => $request->edit_jenis_barang,
                    'kode_kategori' => $request->edit_kode_kategori,
                    'stok' => $request->edit_stok,
                    'status' => $request->edit_status
                ]);

            $user = Auth::user();
            Log::create(
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'divisi' => $user->divisi,
                    'deskripsi' => 'Update Data Barang',
                    'status' => '2',
                    'ip' => $request->ip()

                ]
            );
        }
        return redirect('databrg');

        // return redirect()->back();
    }

    public function deletebarang($id_master, Request $request)
    {
        $brg = Master::where('id_master', $id_master)->first();
        // // dd($barang);
        $brg->delete();

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Delete Data Barang',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        // //mengirim data_brg ke view
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

        $rules = [
            'kategori' => 'required',
            'keterangan' => 'required',
        ];

        $messages = [
            'kategori.required' => '*nama kategori tidak boleh kosong',
            'keterangan.required' => '*keterangan tidak boleh kosong',

        ];
        $this->validate($request, $rules, $messages);

        $kode = strtoupper(substr("KTG", 0, 3));
        $check = count(Kategori::where('kode_kategori', 'like', "%$kode%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $kode_kategori = $kode . "" . $angka;

        Kategori::create([
            'kode_kategori' => $kode_kategori,
            'kategori' => $request->kategori,
            'keterangan' => $request->keterangan
        ]);

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Create Data Kategori',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        return redirect('kategori');
    }

    public function editKategori($id_kategori)
    {

        $data_kategori = Kategori::find($id_kategori);
        return view('master/editktg', compact('data_kategori'));
    }

    public function updateKategori(Request $request)
    {
        $rules = [
            'edit_kategori' => 'required',
            'edit_keterangan' => 'required',
        ];

        $messages = [
            'edit_kategori.required' => '*Nama kategori tidak boleh kosong',
            'edit_keterangan.required' => '*Keterangan tidak boleh kosong',

        ];
        $this->validate($request, $rules, $messages);


        Kategori::where('id_kategori', $request->edit_id_ktg)
            ->update([
                'kode_kategori' => $request->edit_kode,
                'kategori' => $request->edit_kategori,
                'keterangan' => $request->edit_keterangan
            ]);

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Update Data Kategori',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        return redirect('kategori');

        return redirect()->back();
    }

    public function deletekategori($id_kategori, Request $request)
    {
        // dd($id_jenis);
        // dd($id_master);
        // $data_kategori = Master::find($request->id_master);
        $kategori = Kategori::where('id_kategori', $id_kategori)->first();
        // // dd($barang);
        $kategori->delete();

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Delete Data Kategori',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        // //mengirim data_ktg ke view
        return back()->with('success', "Data telah terhapus");
    }

    // DATA JENIS
    public function jenis()
    {
        $data_jenis = jenis::all();
        return view('master/jenis', compact('data_jenis'));
    }

    public function addjenis()
    {

        return view('master/addjenis');
    }

    public function addjenis2(Request $request)
    {
        $rules = [
            'jenis_barang' => 'required',
            'keterangan' => 'required',
        ];

        $messages = [
            'jenis_barang.required' => '*Jenis Barang tidak boleh kosong',
            'keterangan.required' => '*Keterangan tidak boleh kosong',

        ];
        $this->validate($request, $rules, $messages);

        Jenis::create([
            'jenis_barang' => $request->jenis_barang,
            'keterangan' => $request->keterangan
        ]);

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Create Jenis Barang',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        return redirect('jenis');
    }

    public function editJenis($id_jenis)
    {

        $data_jenis = Jenis::find($id_jenis);
        return view('master/editjns', compact('data_jenis'));
    }

    public function updateJenis(Request $request)
    {
        $rules = [
            'edit_jenis' => 'required',
            'edit_keterangan' => 'required'
        ];

        $messages = [
            'edit_jenis.required' => 'Jenis Barang tidak boleh kosong',
            'edit_keterangan.required' => 'Keterangan tidak boleh kosong'

        ];
        $this->validate($request, $rules, $messages);

        Jenis::where('id_jenis', $request->edit_id_jenis)
            ->update([
                'jenis_barang' => $request->edit_jenis,
                'keterangan' => $request->edit_keterangan
            ]);

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Update Jenis Barang',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        return redirect('jenis');

        return redirect()->back();
    }

    public function deletejenis($id_jenis, Request $request)
    {
        // dd($id_jenis);
        $jenis = Jenis::where('id_jenis', $id_jenis)->first();
        // // dd($barang);
        $jenis->delete();

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Delete Jenis Barang',
                'status' => '2',
                'ip' => $request->ip()
            ]
        );
        // //mengirim data_ktg ke view
        return back()->with('success', "Data telah terhapus");
    }
}