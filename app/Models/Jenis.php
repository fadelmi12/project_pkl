<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    
    protected $table = "data_jenis";
    protected $primaryKey = "id_jenis";
    protected $fillable = ['id_jenis', 'jenis_barang', 'keterangan'];

    public function master()
    {
        return $this->hasMany(Master::class);
    }
}
