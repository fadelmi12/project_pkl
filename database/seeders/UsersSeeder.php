<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teknisi = User::create([
            'name' => 'teknisi',
            'email' => 'teknisi@teknisi.com',
            'divisi' => 'teknisi',
            'password' => 'teknisi',
            ]);
        $teknisi->save();

        $warehouse = User::create([
            'name' => 'warehouse',
            'email' => 'warehouse@warehouse.com',
            'divisi' => 'warehouse',
            'password' => 'warehouse',
            ]);
        $warehouse->save();

        $marketing = User::create([
            'name' => 'marketing',
            'email' => 'marketing@marketing.com',
            'divisi' => 'marketing',
            'password' => 'marketing',
            ]);
        $marketing->save();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'divisi' => 'admin',
            'password' => 'admin',
            ]);
        $admin->save();

        $purchasing = User::create([
            'name' => 'purchasing',
            'email' => 'purchasing@purchasing.com',
            'divisi' => 'purchasing',
            'password' => 'purchasing',
            ]);
        $purchasing->save();
    }
}