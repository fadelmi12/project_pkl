<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = Kategori::create([
            'kode_kategori' => '123',
            'kategori' => 'Hardware',
            'keterangan' => 'Baru',
            ]);
        $kategori->save();
    }
}
