<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function supplier()
    {
        $data_supplier = SupplierModel::all();
        return view('supplier/supplier', compact('data_supplier'));
        // return view('supplier/supplier');
    }

    public function add()
    {
        return view('supplier/addsupplier');
    }

    public function editSup($id_supplier)
    {
        $data_supplier = SupplierModel::find($id_supplier);
        return view('supplier/edit', compact('data_supplier'));
    }

    public function updateSup(Request $request)
    {
        SupplierModel::where('id_supplier', $request->edit_id_sup)
            ->update([
                'kode_supplier' => $request->edit_kode,
                'nama_supplier' => $request->edit_nama,
                'email_supplier' => $request->edit_email,
                'alamat_supplier' => $request->edit_alamat,
                'pic_supplier' => $request->edit_pic,
                'telp_supplier' => $request->edit_no
            ]);
        return redirect('supplier');

        return redirect()->back();
    }

    public function addSupplier(Request $request)
    {
        //Kode supp
        $kode = strtoupper(substr("SUPPLIER", 0, 3));
        $check = count(SupplierModel::where('kode_supplier', 'like', "%$kode%")->get()->toArray());
        $angka = sprintf("%03d", (int)$check + 1);
        $kode_supplier = $kode . "" . $angka;

        SupplierModel::create([
            'kode_supplier'     =>  $kode_supplier,
            'nama_supplier'     =>  $request->nama_supplier,
            'email_supplier'    =>  $request->email_supplier,
            'pic_supplier'      =>  $request->pic_supplier,
            'alamat_supplier'   =>  $request->alamat_supplier,
            'telp_supplier'     =>  $request->telp_supplier

        ]);
        return redirect('supplier');
        // return view('master/addjenis');
    }

    public function deletesupplier($id_supplier)
    {
        // dd($id_jenis);
        // dd($id_master);
        // $data_kategori = Master::find($request->id_master);
        $data_supplier = SupplierModel::where('id_supplier', $id_supplier)->first();
        // // dd($barang);
        $data_supplier->delete();
        // //mengirim data_ktg ke view
        return back()->with('success', "Data telah terhapus");
    }
}
