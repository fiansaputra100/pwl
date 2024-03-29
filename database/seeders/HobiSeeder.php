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
                'Kode' => 'B001',
                'nama' => 'Fian Rifky Saputra',
                'nama_hobi' => 'Bermain Voli',
                'kriteria' => 'Olahraga'
            ]  
            ]);
    }
}
