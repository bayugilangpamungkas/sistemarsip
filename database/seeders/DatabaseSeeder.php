<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(2)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'Bayu Gilang Pamungkas',
            'email' => 'gilangb256@gmail.com',
            'password' => bcrypt('gilang0123'),
            'prodi' => 'D3-Manajemen Informatika PSDKU di Kota Kediri',
            'nim' => '2131730130',
            'tgl' => '2023-11-13',


        ]);
    }
}
