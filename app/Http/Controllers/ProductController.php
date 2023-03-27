<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function product($nama){
        return view('layout.product',['nama' => $nama]);
    }
}
