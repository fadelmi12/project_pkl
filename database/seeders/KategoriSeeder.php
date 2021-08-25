<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Kategori = Kategori::create([
            'kode_kategori' => '123',
<<<<<<< HEAD
            'kategori' => 'pc',
=======
            'kategori' => 'hardware',
>>>>>>> 2e552bdf15f4cd1a17d0d17c87daa4d10fb024f0
            'keterangan' => 'baru',
            
            ]);
        $Kategori->save();
    }
}
