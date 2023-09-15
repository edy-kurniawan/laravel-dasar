<?php

use Illuminate\Support\Facades\Route;

// import controller
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\DashboardController;

// controller untuk admin
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

// route untuk halaman sesi 2
Route::get('/sesi-2', function () {
    // mengirim data ke view
    return view('sesi-2', [
        'nama_siswa'    => 'Rizky Khapidsyah',
        'umur'          => 19,
        'mataKuliah'    => [
            'Pemrograman Web Lanjut', 
            'Pemrograman Berbasis Objek 1', 
            'Pemrograman Berbasis Objek 2'
        ]
    ]);
});

// route untuk function index home controller
Route::get('/home', [HomeController::class, 'index']);
// route unruk function about home controller
Route::get('/about', [HomeController::class, 'about']);
// route untuk function contact home controller
Route::get('/contact', [HomeController::class, 'contact']);
// route untuk function blog home controller
Route::get('/blog', [HomeController::class, 'blog']);

// route untuk dashboard controller
Route::resource('dashboard', DashboardController::class);

// route untuk admin
Route::resource('artikel', ArtikelController::class);