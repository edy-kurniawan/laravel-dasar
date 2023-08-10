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

// Route untuk view sesi-1
Route::get('/sesi-1', function () {
    $nama = 'Rizky Syaiful Ramadhan';
    
    return view('sesi-1', [
        'nama'      => $nama,
        'nim'       => '1941720013',
        'kelas'     => 'TI-2D'
    ]);
});

// Route untuk view belajar blade
Route::get('/belajar-blade/{nama}', function ($nama) {
    return view('belajar', [
        'nama'      => $nama
    ]);
});

// Route untuk admin
Route::get('/admin', function () {
    return view('admin.index');
});

// route untuk Home Controller
Route::get('/sesi-3', [HomeController::class, 'index']);
Route::get('/belajar', [HomeController::class, 'belajar']);
Route::get('/belajar2', [HomeController::class, 'belajar2']);

// route untuk Dashboard Controller
Route::resource('dashboard', DashboardController::class);

// route untuk Artikel Controller
Route::resource('artikel', ArtikelController::class);

