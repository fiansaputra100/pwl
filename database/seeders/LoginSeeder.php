<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logins')->insert([
            [
                'no_login' => '111',
                'username' => 'fian',
                'password' => 'fian123',
            ],
         
        ]); 
    }
}
