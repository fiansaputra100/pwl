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
                'NIK' => '36767826374519',
                'nama_keluarga' => 'Fian Rifky Saputra',
                'tanggal_lahir' => '2002-05-01',
                'tempat_lahir' => 'Jakarta',
                'jenis_kelamin' => 'laki-laki',
                'agama' => 'islam',
                'status_perkawinan' => 'belum kawin',
                'status_hubungan' => 'anak',
                'kewarganegaraan' => 'indonesia',
                'jenis_pekerjaan' => 'bisnis sampingan'
            ]  
            ]);
    }
}
