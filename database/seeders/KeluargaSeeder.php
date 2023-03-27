<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'NIK' => '350718030278000',
                'nama_keluarga' => 'Erwan Suhatma',
                'tanggal_lahir' => '1978-02-03',
                'tempat_lahir' => 'Nganjuk',
                'jenis_kelamin' => 'laki-laki',
                'agama' => 'islam',
                'status_perkawinan' => 'KAWIN',
                'status_hubungan' => 'KEPALA KELUARGA',
                'kewarganegaraan' => 'WNI',
                'jenis_pekerjaan' => 'TNI AU',

            ],

            [
                'NIK' => '350718670976000',
                'nama_keluarga' => 'Fitri Wisminingtyas',
                'tanggal_lahir' => '1976-09-27',
                'tempat_lahir' => 'Magetan',
                'jenis_kelamin' => 'perempuan',
                'agama' => 'islam',
                'status_perkawinan' => 'KAWIN',
                'status_hubungan' => 'ISTRI',
                'kewarganegaraan' => 'WNI',
                'jenis_pekerjaan' => 'TNI AU',

            ],

            [
                'NIK' => '350718010502000',
                'nama_keluarga' => 'Fian Rifky Saputra',
                'tanggal_lahir' => '2002-05-01',
                'tempat_lahir' => 'Jakarta',
                'jenis_kelamin' => 'laki-laki',
                'agama' => 'islam',
                'status_perkawinan' => 'BELUM KAWIN',
                'status_hubungan' => 'ANAK',
                'kewarganegaraan' => 'WNI',
                'jenis_pekerjaan' => 'Mahasiswa+Pekerja Bisnis',

            ],

            [
                'NIK' => '350718450610000',
                'nama_keluarga' => 'Risma Rahma yeni',
                'tanggal_lahir' => '2010-06-05',
                'tempat_lahir' => 'Malang',
                'jenis_kelamin' => 'perempuan',
                'agama' => 'islam',
                'status_perkawinan' => 'BELUM KAWIN',
                'status_hubungan' => 'ANAK',
                'kewarganegaraan' => 'WNI',
                'jenis_pekerjaan' => 'Pelajar',

            ]
        ]); 
    }
}
