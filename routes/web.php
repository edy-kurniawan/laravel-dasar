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
    return 'Hello World';
});

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