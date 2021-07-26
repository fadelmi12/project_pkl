<?php

namespace Database\Seeders;

use App\Models\Master;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Master = Master::create([
            'kode_kategori' => '123',
            'nama_barang' => 'Mouse',
            'kode_barang' => '111',
            'jenis_barang' => 'Baru',
            'stok' => '200',
            'gambar' => 'aaa.jpg',
            'status' => '2',
        ]);
        $Master->save();

        $Master = Master::create([
            'kode_kategori' => '124',
            'nama_barang' => 'Keyboard',
            'kode_barang' => '112',
            'jenis_barang' => 'Baru',
            'stok' => '100',
            'gambar' => 'aaa.jpg',
            'status' => '2',
        ]);
        $Master->save();
    }
}
