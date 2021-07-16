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
    public function add()
    {
        return view('administrator/add');
    }
}
