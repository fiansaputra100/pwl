<?php

namespace App\Http\Controllers;

use App\Models\hobi;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    public function index(){
        return view('layout.hobi', [
           'hobi' => hobi::all()
        ]);
       }
}
