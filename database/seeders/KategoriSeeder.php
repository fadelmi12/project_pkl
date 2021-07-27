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
            'kategori' => 'hardware',
            'keterangann' => 'baru',
            
            ]);
        $Kategori->save();
    }
}
