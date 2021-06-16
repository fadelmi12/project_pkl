<?php

namespace App\Http\Controllers;
use App\Models\SupplierModel;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //

    public function __construct()
    {
        $this->SupplierModel = new SupplierModel();
    }
    
    public function supplier()
    {
        $data = [
          'data_supplier' => $this->SupplierModel->allData(), 
        ];
        return view('supplier.supplier', $data);
    }

    // public function supplier()
    // {
    //     return view('supplier/supplier');
    // }

    public function add()
    {
        return view('supplier/addsupplier');
    }
    public function insert()
    {
        Request()->validate([
            'kode_supplier' => 'required|unique:data_supplier,kode_supplier',
            'nama_supplier' => 'required',
            'email_supplier' => 'required',
            'pic_supplier' => 'required',
            'alamat_supplier' => 'required',
            'telp_supplier' => 'required',
        ]);

        $data = [
            'kode_supplier' => Request()->kode_supplier,
            'nama_supplier' => Request()->nama_supplier,
            'email_supplier' => Request()->email_supplier,
            'pic_supplier' => Request()->pic_supplier,
            'alamat_supplier' => Request()->alamat_supplier,
            'telp_supplier' => Request()->telp_supplier,
        ];

        $this->SupplierModel->addData($data);
        return redirect()->route('supplier')->with('pesan','Data berhasil ditambah');

    }
}
