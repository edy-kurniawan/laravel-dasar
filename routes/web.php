<?php

use Illuminate\Support\Facades\Route;

// import controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

// import controller untuk admin
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
    return 'Hello World';
});

// route untuk sesi 2
Route::get('/halaman-2', function () {
    // menampilkan view dan mengirimkan data
    return view('sesi-2', [
        'mahasiswa'     => 'EKO',
        'jurusan'       => 'Sistem Informasi',
        'mataKuliah'    => [
            'Pemrograman Web',
            'Pemrograman Mobile',
            'Pemrograman Desktop'
        ]
    ]);
});

// route untuk home controller
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

// route untuk dashboard controller
Route::resource('/dashboard', DashboardController::class);

// route untuk admin
Route::resource('/artikel', ArtikelController::class);