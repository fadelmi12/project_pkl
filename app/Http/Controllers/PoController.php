<?php

namespace App\Http\Controllers;

use App\Models\PO;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoController extends Controller
{
    //
    public function index()
    {
        $data_po = PO::all();
        return view('po\po', compact('data_po'));
    }

    //
    public function addpo()
    {
        return view('po/addpo');
    }

    public function addpo2(Request $request)
    {
        $user = Auth::user();
        $now = Carbon::now();
        $thnBln= $now->year . $now->month;

        // $kode = strtoupper(substr($request->nama_barang, 0, 3));
        $check = count(PO::where('no_PO', 'like', "%$thnBln%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $noPO = $thnBln . "" . $angka;


        // $check = count(PO::where('no_PO')->get()->toArray());
        // $angka = sprintf("%03d", (int)$check + 1);
        // $noPO = $thnBln . "" . $angka;

        PO::create(
            [
                'no_PO' => $noPO,
                'namaBarang' => $request->namaBarang,
                'jumlah' => $request->jumlah,
                'keterangan' => $request->keterangan,
                'pic_marketing' => $user->name
            ]
        );
        return redirect('/po');
    }
    public function editpo(Request $request)
    {

        PO::where('id_PO', $request->edit_id_po)
        ->update([
            'namaBarang' => $request->namaBarang,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan
        ]);
        return back()->with('success', "Data telah diperbarui");
    }
    public function confirm(Request $request)
    {
        $user = Auth::user();
        if ($user->divisi == "warehouse") {
            PO::where('id_PO', $request->edit_id_po)
            ->update([
                'status' => '2',
                'pic_warehouse' => $user
            ]);
        } elseif ($user->divisi == "admin") {
            PO::where('id_PO', $request->edit_id_po)
            ->update([
                'status' => '4',
                'pic_admin' => $user
            ]);
        }
        return back()->with('success', "Data telah disetujui");
    }

    public function reject(Request $request)
    {
        $user = Auth::user();
        if ($user->divisi == "warehouse") {
            PO::where('id_PO', $request->edit_id_po)
            ->update([
                'status' => '1',
                'keterangan'=> $request->keterangan,
                'pic_warehouse' => $user
            ]);
        } elseif ($user->divisi == "admin") {
            PO::where('id_PO', $request->edit_id_po)
            ->update([
                'status' => '3',
                'keterangan'=> $request->keterangan,
                'pic_warehouse' => $user
            ]);
        }
        return back()->with('success', "Data telah ditolak");
    }
}
