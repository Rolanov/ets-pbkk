<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\RekamMedis;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Dokter::create([
            'nama' => 'Dokter satu',
        ]);
        Dokter::create([
            'nama' => 'Dokter dua',
        ]);
        Dokter::create([
            'nama' => 'Dokter tiga',
        ]);
        Pasien::create([
            'nama' => 'Pasien satu',
        ]);
        Pasien::create([
            'nama' => 'Pasien dua',
        ]);
        Pasien::create([
            'nama' => 'Pasien tiga',
        ]);

        RekamMedis::factory(3)->create();
        // \App\Models\User::factory(10)->create();
    }
}
