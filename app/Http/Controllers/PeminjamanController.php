<?php

namespace App\Http\Controllers;

use App\Models\DetailPeminjaman;
use App\Models\Log;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    //
    public function peminjaman()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman/peminjaman', compact('peminjaman'));
    }

    public function addpinjam()
    {
        return view('peminjaman/addpinjam');
    }

    public function addpinjam2(Request $request)
    {
        $rules = [
            'TabelDinamis' => 'required',
            'kebutuhan' => 'required',
        ];

        $messages = [
            'TabelDinamis.required' => '*Data tidak boleh kosong',
            'kebutuhan.required' => '*Kebutuhan tidak boleh kosong',
        ];
        $this->validate($request, $rules, $messages);
        $user = Auth::user();

        $jumlah_data = count($request->nama_barang);
        for ($i = 0; $i < $jumlah_data; $i++) {
            DetailPeminjaman::create(
                [
                    'nama_barang' => $request->nama_barang[$i],
                    'jumlah' => $request->jumlah[$i],
                    'keterangan' => $request->keterangan[$i],
                ]);
        }

        Peminjaman::create([
            'pic_teknisi' => $user->name,
            'kebutuhan'   => $request->kebutuhan,
        ]);
        $user = Auth::user();
        Log::create(
            [
            'name' => $user->name,
            'email' => $user->email,
            'divisi' => $user->divisi,
            'deskripsi' => 'Create Peminjaman',
            'status' => '2',
            'ip'=> $request->ip()

            ]
        );
        return redirect('peminjaman');
    }

    public function editpinjam($id_peminjaman)
    {
        $peminjaman = Peminjaman::find($id_peminjaman);
        return view('peminjaman/edit', compact('peminjaman'));
    }

    public function updatePinjam(Request $request)
    {
        Peminjaman::where('id_peminjaman', $request->edit_id_pinjam)
            ->update([
                'barang'   => $request->edit_nama_barang,
                'jumlah'        => $request->edit_jumlah,
                'keterangan'    => $request->edit_keterangan,
                'tglKembali'    => $request->edit_tgl_kembali,
            ]);
            $user = Auth::user();
            Log::create(
                [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Update Peminjaman',
                'status' => '2',
                'ip'=> $request->ip()
    
                ]
            );
        return redirect('peminjaman');
        // return redirect()->back();
    }

        public function deletepinjam($id_peminjaman, Request $request)
    {
        // dd($id_jenis);
        // dd($id_master);
        // $data_kategori = Master::find($request->id_master);
        $pinjam = Peminjaman::where('id_peminjaman', $id_peminjaman)->first();
        // // dd($barang);
        $pinjam->delete();

        $user = Auth::user();
        Log::create(
            [
            'name' => $user->name,
            'email' => $user->email,
            'divisi' => $user->divisi,
            'deskripsi' => 'Delete Pengajuan Barang Retur',
            'status' => '2',
            'ip'=> $request->ip()

            ]
        );
        // //mengirim data_ktg ke view
        return redirect('peminjaman')->with('success', "Data telah terhapus");
    }
}
