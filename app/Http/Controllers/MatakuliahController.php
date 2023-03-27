<?php

namespace App\Http\Controllers;

use App\Models\matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(){
        return view('layout.matakuliah', [
           'matakuliah' => matakuliah::all()
        ]);
       }
}
