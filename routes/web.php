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