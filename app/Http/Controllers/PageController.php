<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
        function index(){
            echo "Selamat Datang";
        }
    
        function about(){
            echo "Nama: Fian Rifky Saputra <br> NIM: 2141720029";
        }
    
        function articles($id){
            echo "Halaman Artikel dengan ID $id";
        }
    
}

