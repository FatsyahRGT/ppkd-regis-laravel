<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'id_level' => 1,
            'nama_lengkap' => 'Rohmat Firdaus',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make("12345678")
        ]);

        User::factory()->create([
            'id_level' => 2,
            'nama_lengkap' => 'Ranto Gudhel',
            'email' => 'admin@gmail.com',
            'password' => Hash::make("12345678")
        ]);

        User::factory()->create([
            'id_level' => 3,
            'nama_lengkap' => 'Yanto Kopling',
            'email' => 'pic@gmail.com',
            'password' => Hash::make("12345678")
        ]);
    }
}