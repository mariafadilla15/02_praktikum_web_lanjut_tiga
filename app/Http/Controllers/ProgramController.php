<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //Halaman Pogram - menampilkan daftar program (route prefix)
    public function karir(){
        return 'Halaman program karir yooo';
    }
    public function magang(){
        return 'Halaman magang';
    }
    public function industri(){
        return 'Halaman kunjungan industri' ;
    }
    
}