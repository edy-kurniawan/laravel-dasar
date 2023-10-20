<?php

use Illuminate\Support\Facades\Route;

// import controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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

Route::get('/halaman-2', function () {
    // mereturn view dengan parsing data
    return view('sesi-2', [
        'nama'          => 'Rizky Khapidsyah',
        'jurusan'       => 'Teknik Informatika',
        'mata_kuliah'   => [
            'Pemrograman Web',
            'Pemrograman Berorientasi Objek',
            'Pemrograman Mobile',
        ]
    ]);
});

// route untuk function index di home controller
Route::get('home', [HomeController::class, 'index']);
// route untuk function about di home controller
Route::get('about', [HomeController::class, 'about']);
// route untuk function contact di home controller
Route::get('contact', [HomeController::class, 'contact']);

// route untuk resource dashboard controller
Route::resource('dashboard', DashboardController::class);

// route untuk resource artikel controller
Route::resource('artikel', ArtikelController::class);