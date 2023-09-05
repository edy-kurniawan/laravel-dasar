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

// route untuk sesi 2
Route::get('/sesi-2', function () {
    return view('sesi-2', [
        'nama_siswa'  => 'Rizky',
        'umur'  => 17,
        'kelas' => 'XII RPL 1',
        'mata_pelajaran' => ['Matematika', 'Bahasa Indonesia', 'Bahasa Inggris', 'Produktif RPL', 'Produktif TKJ']
    ]);
});

Route::get('/contoh/{nama}', function ($nama) {
    // mereturn view dan mengirimkan data nama
    return view('bootstrap', [
        'nama' => $nama
    ]);
});

