<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matakuliah')->insert([
            [
                'kode_MK' => 'RTI214001',
                'nama_matakuliah' => 'Kewarganegaraan',
                'hari' => 'rabu',
                'nama_dosen' => 'Widaningsih, S.H., M.H.',
            ],
            [
                'kode_MK' => 'RTI214004',
                'nama_matakuliah' => 'Proyek 1',
                'hari' => 'senin',
                'nama_dosen' => 'Rudy Ariyanto, S.T., M.Cs.',
            ],

            [
                'kode_MK' => 'RTI214003',
                'nama_matakuliah' => 'Manajemen Proyek',
                'hari' => 'selasa',
                'nama_dosen' => 'Candra Bella Vista, S.Kom., M.T.',
            ],

            [
                'kode_MK' => 'RTI214006',
                'nama_matakuliah' => 'Jaringan Komputer',
                'hari' => 'selasa',
                'nama_dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
            ],

            [
                'kode_MK' => 'RTI214008',
                'nama_matakuliah' => 'Pemrograman Web Lanjut',
                'hari' => 'rabu',
                'nama_dosen' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom.',
            ],

            [
                'kode_MK' => 'RTI214007',
                'nama_matakuliah' => 'Praktikum Jaringan Komputer',
                'hari' => 'kamis',
                'nama_dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
            ],

            [
                'kode_MK' => 'RTI214009',
                'nama_matakuliah' => 'Statistik Komputasi',
                'hari' => 'kamis',
                'nama_dosen' => 'Elok Nur Hamdana, S.T, M.T.',
            ],

            [
                'kode_MK' => 'RTI214005',
                'nama_matakuliah' => 'Business Intelligence',
                'hari' => 'jumat',
                'nama_dosen' => 'Endah Septa Sintiya, S.Pd., M.Kom.',
            ],

            [
                'kode_MK' => 'RTI214002',
                'nama_matakuliah' => '	Analisis dan Desain Berorentasi Objek',
                'hari' => 'jumat',
                'nama_dosen' => 'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom.',
            ],
        ]); 
        }
}
