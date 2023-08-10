<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama   = 'Rizky Syaiful Ramadhan';
        $nim    = '1941720013';
        $matkul = [
            'Pemrograman Web Lanjut',
            'Pemrograman Berorientasi Objek',
            'Pemrograman Mobile',
            'Pemrograman Desktop',
            'Pemrograman Web Dasar',
        ];

        // ambil data dari table artikel dengan perantara model Artikel
        $artikel = Artikel::all();

        return view('sesi-3', [
            'nama'      => $nama,
            'nim'       => $nim,
            'matkul'    => $matkul,
            'artikel'   => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'ini function create() dari DashboardController';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'ini function show() dari DashboardController dengan parameter id = ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
