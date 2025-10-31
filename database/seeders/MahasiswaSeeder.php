<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'name' => "Gibran Bintang Hakim",
                'nim' => "1324242006",
                'prodi' => "S1 Teknologi Informasi",
                'email' => "gibranbintang@gmail.com",
            ],
            [
                'name' => "Inspector lunge",
                'nim' => "1324242000",
                'prodi' => "S1 Kriminologi",
                'email' => "lungedepartement@gmail.com",
            ],
            [
                'name' => "Adit Rendang",
                'nim' => "1231231756",
                'prodi' => "Teknologi Informasi",
                'email' => "RendangJosjis@gmail.com",
            ]
        ]);
    }
}