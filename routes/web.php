<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

//Halaman Home
// Route::get('/', function(){
//     echo "[Welcome] <br> Educa Studio <br> A Simple Fun Educational Platform (tanpa controller)";
// });

//Halaman home - dengan controller 
Route::get('/', [HomeController::class, 'index']);


//Halaman Products
// Route::prefix('products')->group(function () {
//     Route::get('/marbel-edu-games', function(){
//         echo "Halaman Marbel-Educational Games";
//     });
//     Route::get('/marbel-and-friends-kids-games', function(){
//         echo "Halaman Marble & Friends-Kids Games";
//     });
//     Route::get('/riri-story-books', function(){
//         echo "Halaman Riri-Story Books";
//     });
//     Route::get('/kolak-kids-songs', function(){
//         echo "Halaman Kolak-Kids Songs";
//     });
// });

//Halaman Products - dengan controller
Route::prefix('products')->group(function(){
    Route::get('/marbel-edu-games', [ProductsController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'kidsgames']);
    Route::get('/riri-story-books', [ProductsController::class, 'riristory']);
    Route::get('/kolak-kids-songs', [ProductsController::class, 'kolakkids']);
});

//Halaman News
Route::get('/news/{judulberita}', function ($judul){
    echo "Berita Terbaru - $judul";
});

//Halaman Program - dengan controller
Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'industri']);
});

//Halaman About Us
// Route::get('about-us', function(){
//     echo "About-us";
// })->name('about-us');

//Halaman About Us - dengan controller
Route::get('about-us', [AboutController::class, 'about']);

//Halaman Contact Us
Route::resource('contact-us', ContactController::class);
Route::resource('contact-us',  ContactController::class)->only(['index', 'store']);