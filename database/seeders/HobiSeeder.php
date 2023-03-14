<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'kode_no' => 'C01',
                'nama' => ' Fian Rifky Saputra',
                'nama_hobi' => 'volly, futsal',
                'kriteria_hobi' => 'olahraga',

            ],

            [
                'kode_no' => 'C02',
                'nama' => ' Dyo Erizky Saputra',
                'nama_hobi' => 'Basket,gym',
                'kriteria_hobi' => 'olahraga',
            ],

            [
                'kode_no' => 'C03',
                'nama' => ' Muhammad Gerald',
                'nama_hobi' => 'mengendarai motor',
                'kriteria_hobi' => 'riding',
            ],

            [
                'kode_no' => 'C04',
                'nama' => 'Afrianto',
                'nama_hobi' => 'Bermain Game',
                'kriteria_hobi' => 'gamers',
            ],

            [
                'kode_no' => 'C05',
                'nama' => 'Ahmad Ghozi',
                'nama_hobi' => 'gym',
                'kriteria_hobi' => 'olahraga',
            ]
            
            

        ]); 
    }
}
