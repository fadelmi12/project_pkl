<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SupplierModel extends Model
{
    public function allData()
    {
        return DB::table('data_supplier')->get();  
    }

    public function addData($data)
    {
        DB::table('data_supplier')->insert($data);
        
    }
}

