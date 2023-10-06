<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/sesi-2', function () {
    return view('sesi-2',[
        'nama_siswa' => 'Rizky',
        'umur' => 17,
        'mata_pelajaran' => ['Matematika', 'Fisika', 'Kimia']
    ]);
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);

Route::resource('artikel', ArtikelController::class);