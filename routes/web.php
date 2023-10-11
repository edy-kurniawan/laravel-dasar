<?php

use Illuminate\Support\Facades\Route;

// import controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route untuk view sesi 2
Route::get('/halaman-2', function () {
    return view('sesi-2',[
        'nama'          => 'Rizky',
        'jurusan'       => 'XII RPL 1',
        'mataKuliah'    => [
            'Pemrograman Web', 
            'Pemrograman Berorientasi Objek', 
            'Pemrograman Mobile', 
            'Pemrograman Desktop'
        ]
    ]);
});

// route untuk home controller di function index
Route::get('/home', [HomeController::class, 'index']);
// route untuk home controller di function about
Route::get('/about', [HomeController::class, 'about']);
// route untuk home controller di function contact
Route::get('/contact', [HomeController::class, 'contact']);

// route untuk resource artikel controller
Route::resource('artikel', ArtikelController::class);