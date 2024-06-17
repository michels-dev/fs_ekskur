<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkskurTemporersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ekskur_temporers')->insert([
            [
                'sekolah' => 'SMAK 1 BPK PENABUR Jakarta',
                'periode' => '2024',
                'npwp' => '445561',
                'nik' => '0123291',
                'nama_lengkap' => 'Michel Sinambela',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
                'nama_bank' => 'BCA',
                'norek' => '1272992200',
                'atas_nama' => 'Michel Sinambela'
            ],
            [
                'sekolah' => 'SMAK 2 BPK PENABUR Jakarta',
                'periode' => '2024',
                'npwp' => '445562',
                'nik' => '0123292',
                'nama_lengkap' => 'Bernadetta Ardanari',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
                'nama_bank' => 'BCA',
                'norek' => '1272992201',
                'atas_nama' => 'Bernadetta Ardanari'
            ],
            [
                'sekolah' => 'SMAK 3 BPK PENABUR Jakarta',
                'periode' => '2024',
                'npwp' => '445563',
                'nik' => '0123293',
                'nama_lengkap' => 'Juan Zefrindelix',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
                'nama_bank' => 'BCA',
                'norek' => '1272892202',
                'atas_nama' => 'Juan Zefrindelix'
            ],
            [
                'sekolah' => 'SMAK 4 BPK PENABUR Jakarta',
                'periode' => '2024',
                'npwp' => '445564',
                'nik' => '0123294',
                'nama_lengkap' => 'Marta Wea',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
                'nama_bank' => 'BCA',
                'norek' => '1272892203',
                'atas_nama' => 'Marta Wea'
            ],
            [
                'sekolah' => 'SMAK 5 BPK PENABUR Jakarta',
                'periode' => '2024',
                'npwp' => '445565',
                'nik' => '0123295',
                'nama_lengkap' => 'Marco Simbolon',
                'jenis_ekskur' => 'Rutin',
                'honor' => '10.000.000',
                'nama_bank' => 'BCA',
                'norek' => '1272992204',
                'atas_nama' => 'Marco Simbolon'
            ],
        ]);
    }
}
