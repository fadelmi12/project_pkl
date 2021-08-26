<?php

namespace App\Http\Controllers;

use App\Models\DetailPO;
use App\Models\Log;
use App\Models\Pembelian;
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
        $now = Carbon::now();
        $thnBln = $now->year . $now->month;

        // $kode = strtoupper(substr($request->nama_barang, 0, 3));
        $check = count(PO::where('no_PO', 'like', "%$thnBln%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $noPO = $thnBln . "" . $angka;
        $tanggal =  $now->year . "-" . $now->month . "-" . $now->day;
        // dd($tanggal);
        return view('po/addpo', compact('noPO', 'tanggal'));
    }

    public function addpo2(Request $request)
    {
        $user = Auth::user();

        // $rules = [
        //     'TabelDinamis' => 'required'
        // ];

        // $messages = [
        //     'TabelDinamis.required' => '*Data tidak boleh kosong'
        // ];
        // $this->validate($request, $rules, $messages);

        $jumlah_data = count($request->noPO);
        for ($i = 0; $i < $jumlah_data; $i++) {
            DetailPO::create(
                [
                    'no_PO' => $request->noPO[$i],
                    'nama_barang' => $request->nama_barang[$i],
                    'jumlah' => $request->jumlah[$i],
                    'keterangan' => $request->keterangan[$i],
                ]
            );
        }

        PO::create(
            [
                'no_PO' => $request->no_PO,
                'instansi' => $request->instansi,
                'tgl_pemasangan' => $request->tgl_transaksi,
                'pic_marketing' => $user->name
            ]
        );

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Create PO',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        return redirect('/po');
    }
    public function editpo(Request $request)
    {
        $rules = [
            'namaBarang' => 'required',
            'jumlah' => 'required',
        ];

        $messages = [
            'namaBarang.required' => '*Nama barang tidak boleh kosong',
            'jumlah.required' => '*Jumlah barang tidak boleh kosong',
        ];
        $this->validate($request, $rules, $messages);
        PO::where('id_PO', $request->edit_id_po)
            ->update([
                'namaBarang' => $request->namaBarang,
                'jumlah' => $request->jumlah,
                'keterangan' => $request->keterangan
            ]);

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Update PO',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        return back()->with('success', "Data telah diperbarui");
    }
    public function confirm(Request $request)
    {
        $user = Auth::user();
        if ($user->divisi == "warehouse") {
            PO::where('id_PO', $request->edit_id_po)
                ->update([
                    'status' => '2',
                    'pic_warehouse' => $user->name
                ]);
            $user = Auth::user();
            Log::create(
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'divisi' => $user->divisi,
                    'deskripsi' => 'Confirm PO',
                    'status' => '2',
                    'ip' => $request->ip()
                ]
            );
        } elseif ($user->divisi == "admin") {
            PO::where('id_PO', $request->edit_id_po)
                ->update([
                    'status' => '4',
                    'pic_admin' => $user->name
                ]);

            $user = Auth::user();
            Log::create(
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'divisi' => $user->divisi,
                    'deskripsi' => 'Confirm PO',
                    'status' => '2',
                    'ip' => $request->ip()

                ]
            );
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
                    'keterangan' => $request->keterangan,
                    'pic_warehouse' => $user->name
                ]);
            $user = Auth::user();
            Log::create(
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'divisi' => $user->divisi,
                    'deskripsi' => 'Reject PO',
                    'status' => '2',
                    'ip' => $request->ip()

                ]
            );
        } elseif ($user->divisi == "admin") {
            PO::where('id_PO', $request->edit_id_po)
                ->update([
                    'status' => '3',
                    'keterangan' => $request->keterangan,
                    'pic_warehouse' => $user->name
                ]);

            $user = Auth::user();
            Log::create(
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'divisi' => $user->divisi,
                    'deskripsi' => 'Reject PO',
                    'status' => '2',
                    'ip' => $request->ip()

                ]
            );
        }
        return back()->with('success', "Data telah ditolak");
    }

    public function detailpo($id_po)
    {
        $data_po = [
            'po' => $this->DetailPO->detailpo($id_po),
        ];
        return view('po/detail', compact('data_po'));
    }
}
