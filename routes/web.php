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

// route untuk view sesi 2
Route::get('/halaman-2', function () {
    return view('sesi-2',[
        'nama'          => 'Rizky',
        'jurusan'       => 'XII RPL 1',
        'mataKuliah'    => [
            'Pemrograman Web', 
            'Pemrograman Berorientasi Objek', 
            'Pemrograman Mobile', 
            'Pemrograman Desktop'
        ]
    ]);
});
