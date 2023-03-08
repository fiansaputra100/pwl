<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function contactUs(){
        return view ('layout.contact-us');
    }
}
