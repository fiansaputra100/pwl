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
                'waktu' => '2 jam',
                'jam_ke' => '1',
                'nama_dosen' => 'Widaningsih',
            ],
            [
                'kode_MK' => 'RTI214004',
                'nama_matakuliah' => 'Proyek 1',
                'hari' => 'senin',
                'waktu' => '6 jam',
                'jam_ke' => '5',
                'nama_dosen' => 'Rudy Ariyanto',
            ],

            [
                'kode_MK' => 'RTI214003',
                'nama_matakuliah' => 'Manajemen Proyek',
                'hari' => 'selasa',
                'waktu' => '2 jam setengah',
                'jam_ke' => '2',
                'nama_dosen' => 'Candra Bella Vista',
            ],

            [
                'kode_MK' => 'RTI214006',
                'nama_matakuliah' => 'Jaringan Komputer',
                'hari' => 'selasa',
                'waktu' => '4 jam',
                'jam_ke' => '5',
                'nama_dosen' => 'Kadek Suarjuna Batubulan',
            ],

            [
                'kode_MK' => 'RTI214008',
                'nama_matakuliah' => 'Pemrograman Web Lanjut',
                'hari' => 'rabu',
                'waktu' => '4 jam 50 menit',
                'jam_ke' => '7',
                'nama_dosen' => 'Moch. Zawaruddin Abdullah',
            ],

            [
                'kode_MK' => 'RTI214007',
                'nama_matakuliah' => 'Praktikum Jaringan Komputer',
                'hari' => 'kamis',
                'waktu' => '2 jam setengah',
                'jam_ke' => '1',
                'nama_dosen' => 'Kadek Suarjuna Batubulan',
            ],

            [
                'kode_MK' => 'RTI214009',
                'nama_matakuliah' => 'Statistik Komputasi',
                'hari' => 'kamis',
                'waktu' => '4 jam',
                'jam_ke' => '5',
                'nama_dosen' => 'Elok Nur Hamdana',
            ],

            [
                'kode_MK' => 'RTI214005',
                'nama_matakuliah' => 'Business Intelligence',
                'hari' => 'jumat',
                'waktu' => '3 jam setengah',
                'jam_ke' => '2',
                'nama_dosen' => 'Endah Septa Sintiya	',
            ],

            [
                'kode_MK' => 'RTI214002',
                'nama_matakuliah' => '	Analisis dan Desain Berorentasi Objek',
                'hari' => 'jumat',
                'waktu' => '3 jam setengah',
                'jam_ke' => '9',
                'nama_dosen' => 'Ariadi Retno Tri Hayati Ririd',
            ],
        ]); 
        }
}
