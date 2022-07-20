<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $penguji = User::create([
            'name' => 'Penguji',
            'email' => 'penguji@penguji.com',
            'password' => bcrypt('password'),
        ]);
        $penguji->assignRole('penguji');

        $kepala = User::create([
            'name' => 'Kepala UPT PKB',
            'email' => 'kepala@uptpkb.com',
            'password' => bcrypt('password'),
        ]);
        $kepala->assignRole('kepalauptpkb');
    }
}