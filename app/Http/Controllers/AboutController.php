<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Halaman About Us - menampilkan about us (route biasa)
    public function about(){
        return "About Us";
    }
}
