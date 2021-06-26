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
        SupplierModel::create([
            'kode_supplier'     =>  $request->kode_supplier,
            'nama_supplier'     =>  $request->nama_supplier,
            'email_supplier'    =>  $request->email_supplier,
            'pic_supplier'      =>  $request->pic_supplier,
            'alamat_supplier'   =>  $request->alamat_supplier,
            'telp_supplier'     =>  $request->telp_supplier

        ]);
        return redirect('supplier');
        // return view('master/addjenis');
    }
}
