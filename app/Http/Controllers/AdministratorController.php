<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    //
    public function index()
    {
        return view('administrator/administrator');
    }

    public function users()
    {
        $users = Administrator::all();
        return view('administrator/administrator', compact('users'));
        // return view('supplier/supplier');
    }
    public function addadmin()
    {
        return view('administrator/addadmin');
    }
    public function addadmin2(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'divisi' => 'required',
        ];

        $messages = [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password Barang tidak boleh kosong',
            'divisi.required' => 'Divisi tidak boleh kosong',

        ];
        $this->validate($request, $rules, $messages);

        Administrator::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'divisi' => $request->divisi
        ]);
        return redirect('administrator');
    }

}
