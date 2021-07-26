<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransaksiModel extends Model
{
    use HasFactory;

    protected $table = "transaksi_masuk";
    protected $primaryKey = "id_transaksi";

    protected $fillable = [
        'id_transaksi', 'no_transaksi', 'tgl_transaksi', 'jns_transaksi', 'kondisi', 'instansi', 'pengirim', 'penerima', 'ekspedisi', 'created_at', 'updated_at'
    ];

    public function supplier()
    {
        return $this->belongsTo(SupplierModel::class);
    }
}
