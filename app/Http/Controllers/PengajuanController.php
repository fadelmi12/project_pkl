<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class PengajuanController extends Controller
{
    //-----------------------------------------baru---------------------------------------------------------------//    

    public function tabelBaru(Request $request)
    {
        $data_baru = Pengajuan::all()->where('jenisBarang', '', 'Baru');
        return view('pengajuan/brgbaru', compact('data_baru'));
    }

    public function addbaru()
    {
        return view('pengajuan/addbrgbaru');
    }

    public function addbaru2(Request $request)
    {
        $user = Auth::user();
        $baru = 'Baru';
        Pengajuan::create(
            [
                'namaBarang' => $request->namaBarang,
                'jmlBarang' => $request->jmlBarang,
                'keterangan' => $request->keterangan,
                'jenisBarang' => $baru,
                'pic_teknisi' => $user->name
            ]
        );
        return redirect('/brgbaru');
    }
    public function editBaru($id_pengajuan)
    {
        $data_baru = Pengajuan::find($id_pengajuan);
        return view('pengajuan/editbrgbaru', compact('data_baru'));
    }

    public function updateBaru(Request $request)
    {
        Pengajuan::where('id_pengajuan', $request->edit_id_pengajuan)
            ->update([
                'namaBarang' => $request->edit_nama,
                'jmlBarang' => $request->edit_jumlah,
                'keterangan' => $request->edit_keterangan
            ]);
        return redirect('/brgbaru');
    }
    public function deletebaru($id_pengajuan)
    {
        // dd($id_jenis);
        // dd($id_master);
        // $data_kategori = Master::find($request->id_master);
        $baru = Pengajuan::where('id_pengajuan', $id_pengajuan)->first();
        // // dd($barang);
        $baru->delete();
        // //mengirim data_ktg ke view
        return back()->with('success', "Data telah terhapus");
    }
    //-----------------------------------------retur---------------------------------------------------------------//    
    public function tabelRetur(Request $request)
    {
        $data_baru = Pengajuan::all()->where('jenisBarang', '', 'Retur');
        return view('pengajuan/brgretur', compact('data_baru'));
    }

    public function addretur()
    {
        return view('pengajuan/addbrgretur');
    }

    public function addretur2(Request $request)
    {
        $retur = 'Retur';
        Pengajuan::create(
            [
                'noPO' => $request->noPO,
                'namaBarang' => $request->namaBarang,
                'namaBarang' => $request->namaBarang,
                'jmlBarang' => $request->jmlBarang,
                'keterangan' => $request->keterangan,
                'jenisBarang' => $retur
            ]
        );
        return redirect('/brgretur');
    }
    public function editRetur($id_pengajuan)
    {
        $data_baru = Pengajuan::find($id_pengajuan);
        return view('pengajuan/editbrgretur', compact('data_baru'));
    }

    public function updateRetur(Request $request)
    {
        Pengajuan::where('id_pengajuan', $request->edit_id_pengajuan)
            ->update([
                'noPO' => $request->edit_noPO,
                'namaBarang' => $request->edit_nama,
                'jmlBarang' => $request->edit_jumlah,
                'keterangan' => $request->edit_keterangan
            ]);
        return redirect('/brgretur');
    }
    public function deleteretur($id_pengajuan)
    {
        // dd($id_jenis);
        // dd($id_master);
        // $data_kategori = Master::find($request->id_master);
        $baru = Pengajuan::where('id_pengajuan', $id_pengajuan)->first();
        // // dd($barang);
        $baru->delete();
        // //mengirim data_ktg ke view
        return back()->with('success', "Data telah terhapus");
    }

    public function Confirm(Request $request)
    {
        $user = Auth::user();
        if (Auth::user()->divisi == "marketing"){
            Pengajuan::where('id_pengajuan', $request->edit_id_pengajuan)
                ->update([
                    'noPO' => $request->edit_noPO,
                    'pic_marketing' => $user->name,
                    'status' => '2'
                ]);
        }
        elseif (Auth::user()->divisi == "warehouse"){
            Pengajuan::where('id_pengajuan', $request->edit_id_pengajuan)
                ->update([
                    'pic_warehouse' => $user->name,
                    'status' => '4'
                ]);
        }
        elseif (Auth::user()->divisi == "admin"){
            Pengajuan::where('id_pengajuan', $request->edit_id_pengajuan)
                ->update([
                    'pic_admin' => $user->name,
                    'status' => '6'
                ]);
        }
        
        return redirect('/brgbaru')->with('success', "Data telah diperbarui");
    }

    public function Reject(Request $request)
    {
        $user = Auth::user();
        if (Auth::user()->divisi == "marketing"){
            Pengajuan::where('id_pengajuan', $request->edit_id_pengajuan)
                ->update([
                    'pic_marketing' => $user->name,
                    'status' => '1'
                ]);
        }
        elseif (Auth::user()->divisi == "warehouse"){
            Pengajuan::where('id_pengajuan', $request->edit_id_pengajuan)
                ->update([
                    'pic_warehouse' => $user->name,
                    'status' => '3'
                ]);
        }
        elseif (Auth::user()->divisi == "admin"){
            Pengajuan::where('id_pengajuan', $request->edit_id_pengajuan)
                ->update([
                    'pic_admin' => $user->name,
                    'status' => '5'
                ]);
        }
        
        return redirect('/brgbaru')->with('success', "Data telah diperbarui");
    }
}
