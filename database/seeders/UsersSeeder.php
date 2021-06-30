<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $teknisi = User::create([
            'name' => 'teknisi',
            'email' => 'teknisi@teknisi.com',
            'divisi' => 'teknisi',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(60),
            ]);
        $teknisi->save();

        $warehouse = User::create([
            'name' => 'warehouse',
            'email' => 'warehouse@warehouse.com',
            'divisi' => 'warehouse',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(60),
            ]);
        $warehouse->save();

        $marketing = User::create([
            'name' => 'marketing',
            'email' => 'marketing@marketing.com',
            'divisi' => 'marketing',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(60),
            ]);
        $marketing->save();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'divisi' => 'admin',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(60),
            ]);
        $admin->save();

        $purchasing = User::create([
            'name' => 'purchasing',
            'email' => 'purchasing@purchasing.com',
            'divisi' => 'purchasing',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(60),
            ]);
        $purchasing->save();
    }
}