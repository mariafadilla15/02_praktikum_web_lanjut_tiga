<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //Halaman Products - menampilkan daftar product ( route prefix)
    public function edugames(){
        return 'Halaman Marbel-Educational Games';
    }
    public function kidsgames(){
        return 'Halaman Marbel & Friends-Kids Games';
    }
    public function riristory(){
        return 'Halaman Riri-Story Books' ;
    }
    public function kolakkids(){
        return "Halaman Kolak-Kids Songs" ;
    }
}
