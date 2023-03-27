<?php

namespace App\Http\Controllers;

use App\Models\keluarga;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index(){
        return view('layout.keluarga', [
           'keluarga' => keluarga::all()
        ]);
       }
}
