<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTrkMasuk extends Model
{
    use HasFactory;

    protected $table = "detail_transaksi_masuk";
    protected $primaryKey = "id_transaksi";

    protected $fillable = ['id_transaksi', 'no_transaksi', 'kode_barang', 'tgl_transaksi', 'supplier', 'po', 'nama_barang', 'instansi', 'jumlah', 'kondisi', 'created_at',	'updated_at'];
}
