<?php

use Illuminate\Support\Facades\Route;

// import controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

// route default laravel
Route::get('/', function () {
    return view('welcome');
});

// route untuk view sesi 2
Route::get('/sesi-2', function () {
    return view('sesi-2', [
        'nama'      => 'Rizky',
        'jurusan'   => 'Teknik Informatika',
    ]);
});

// route untuk home controller
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

// route untuk dashboard controller
Route::resource('dashboard', DashboardController::class);

