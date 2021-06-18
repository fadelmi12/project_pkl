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

    public function supplierUpdate(Request $request)
    {
        $data_supplier = SupplierModel::find($request->edit_id_sup);
        $data_supplier->id_supplier = $request->edit_id_sup;
        $data_supplier->kode_supplier = $request->edit_kode;
        $data_supplier->email_supplier = $request->edit_email;
        $data_supplier->alamat_supplier = $request->edit_alamat;
        $data_supplier->pic_supplier = $request->edit_pic;
        $data_supplier->telp_supplier = $request->edit_no;
        $data_supplier->save();
        //mengirim data_jenis ke view
        return back()->with('success', "Data telah terupdate");
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
