<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Halaman Home - menampilkan halaman awal website
    public function index(){
        return '[Welcome] <br> Educa Studio <br> A Simple Fun Educational Platform';
    }
}
