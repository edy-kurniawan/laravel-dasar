<?php

use Illuminate\Support\Facades\Route;

// import controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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

Route::get('/sesi-2', function () {
    return view('sesi-2', [
        'nama' => 'Rizky',
        'umur' => 20,
        'mataKuliah' => [
            'Pemrograman Web Lanjut',
            'Pemrograman Berbasis Objek',
            'Pemrograman Mobile'
        ]
    ]);
});

Route::get('/contoh', function () {
    return view('bootstrap');
});

Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});

// route untuk home controller
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

// route untuk dashboard controller
Route::resource('dashboard', DashboardController::class);

// route untuk admin
Route::resource('artikel', ArtikelController::class);