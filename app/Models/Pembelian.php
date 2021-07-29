<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = "pembelian";
    protected $primaryKey = "id_pembelian";
    protected $fillable = ['id_pembelian', 'noPO','namaBarang','tglBeli','harga','jumlah','sisaBayar', 'totalBayar'
                            , 'status','created_at','updated_at'];
}
