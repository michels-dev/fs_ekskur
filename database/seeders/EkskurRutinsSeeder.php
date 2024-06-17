<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkskurRutinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ekskur_rutins')->insert([
            [
                'sekolah' => 'SMAK 1 BPK PENABUR Jakarta',
                'periode' => '2024',
                'nik' => '0123291',
                'nama_lengkap' => 'Michel Sinambela',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
            ],
            [
                'sekolah' => 'SMAK 2 BPK PENABUR Jakarta',
                'periode' => '2024',
                'nik' => '0123292',
                'nama_lengkap' => 'Bernadetta Ardanari',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
            ],
            [
                'sekolah' => 'SMAK 3 BPK PENABUR Jakarta',
                'periode' => '2024',
                'nik' => '0123293',
                'nama_lengkap' => 'Juan Zefrindelix',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
            ],
            [
                'sekolah' => 'SMAK 4 BPK PENABUR Jakarta',
                'periode' => '2024',
                'nik' => '0123294',
                'nama_lengkap' => 'Marta Wea',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
            ],
            [
                'sekolah' => 'SMAK 5 BPK PENABUR Jakarta',
                'periode' => '2024',
                'nik' => '0123295',
                'nama_lengkap' => 'Marco Simbolon',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
            ],
        ]);
    }
}
