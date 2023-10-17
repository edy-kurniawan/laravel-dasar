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
