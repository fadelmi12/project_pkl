<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

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
        Peminjaman::create([
            'nama'          => $request->nama,
            'barang'   => $request->nama_barang,
            'jumlah'        => $request->jumlah,
            'keterangan'    => $request->keterangan,
            'tglPinjam'     => $request->tgl_pinjam,
            // 'tglKembali'    => $request->tgl_kembali,
            'status'        => 'pinjam'
        ]);
        return redirect('peminjaman');
    }

    public function editpinjam($id_peminjaman)
    {
        $peminjaman = Peminjaman::find($id_peminjaman);
        return view('peminjaman/edit', compact('peminjaman'));
    }

    public function updatePinjam(Request $request)
    {
        if ($request->edit_tgl_kembali) {
            $status = 'dikembalikan';
        } else {
            $status = 'pinjam';
        }
        Peminjaman::where('id_peminjaman', $request->edit_id_pinjam)
            ->update([
                'nama'          => $request->edit_nama,
                'barang'   => $request->edit_nama_barang,
                'jumlah'        => $request->edit_jumlah,
                'keterangan'    => $request->edit_keterangan,
                'tglPinjam'     => $request->edit_tgl_pinjam,
                'tglKembali'    => $request->edit_tgl_kembali,
                'status'        => $status
            ]);
        return redirect('peminjaman');
        // return redirect()->back();
    }
}
