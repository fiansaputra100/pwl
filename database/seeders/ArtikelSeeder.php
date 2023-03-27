<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'kode' => 'B101',
                'nama_buku' => ' Cara Programing Dengan Benar ',
                'tanggal_rilis' => '2012-05-01',
                'penulis' => 'Thomas Hitler',
                'jumlah_halaman' => '100'
            ],
            
            [
                'kode' => 'B102',
                'nama_buku' => 'Rumus Bisnis',
                'tanggal_rilis' => '2015-09-20',
                'penulis' => 'Elon Musk',
                'jumlah_halaman' => '200'
            ],

            [
                'kode' => 'B103',
                'nama_buku' => 'Teknologi Informasi',
                'tanggal_rilis' => '2018-12-11',
                'penulis' => 'Steven Kurniawan',
                'jumlah_halaman' => '150'
            ],

            [
                'kode' => 'B104',
                'nama_buku' => 'Manajemen Bisnis',
                'tanggal_rilis' => '2017-12-25',
                'penulis' => 'Thomas Edision',
                'jumlah_halaman' => '300'
            ],

            [
                'kode' => 'B105',
                'nama_buku' => 'Matematika',
                'tanggal_rilis' => '2020-06-11',
                'penulis' => 'Margareta',
                'jumlah_halaman' => '150'
            ]

            ]); 

    }
}
