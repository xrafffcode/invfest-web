<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'email' => 'admin@invfest.my.id',
            'password' => bcrypt('invfest2023*'),
        ]);

        $admin->assignRole('admin');

        $petugas = User::create([
            'email' => 'petugas@invfest.my.id',
            'password' => bcrypt('petugas2023*'),
        ]);

        $petugas->assignRole('petugas');
    }
}
