<?php

use Illuminate\Support\Facades\Route;

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
        'nama'      => 'Rizky',
        'jurusan'   => 'Teknik Informatika',
    ]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/single', function () {
    return view('single');
});
