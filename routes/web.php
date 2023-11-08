<?php

use Illuminate\Support\Facades\Route;

// import controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ArtikelController;

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

Route::get('/halaman-sesi-2', function () {
    return view('sesi-2', [
        'nama_mahasiwa'      => 'Rizky',
        'jurusan'       => 'Teknik Informatika',
        'mata_kuliah'   => [
            'Pemrograman Web Lanjut',
            'Pemrograman Berbasis Objek',
            'Pemrograman Mobile',
            'Pemrograman Desktop',
            'Pemrograman Web Dasar'
        ]
    ]);
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/single', [HomeController::class, 'single']);

Route::resource('artikel', ArtikelController::class);