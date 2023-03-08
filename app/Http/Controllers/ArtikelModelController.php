<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelModelController extends Controller
{
    public function index(){
     return view('layout.artikel', [
        'artikel' => ArtikelModel::all()
     ]);
    }
}
