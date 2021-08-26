<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPO extends Model
{
    use HasFactory;
    protected $table = "detail_po";
    protected $primaryKey = "id_PO";
    protected $fillable = ['id_PO','no_PO','nama_barang', 'jumlah','keterangan','status'
                            ,'created_at'];}
