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
Route::get('/sesi-2', function () {
    // mereturn view dan mengirimkan data
    return view('sesi-2', [
        'nama_siswa' => 'Edy Kurniawan',
        'umur' => 19,
        'mata_pelajaran' => ['Matematika', 'Fisika', 'Kimia', 'Biologi']
    ]);
});

