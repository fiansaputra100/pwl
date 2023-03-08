<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

        function news($berita){
            return view('layout.news',['berita' => $berita]);
        }
    }
  

