<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function program($isi){
        return view('layout.program',['isi' => $isi]);
    }
}