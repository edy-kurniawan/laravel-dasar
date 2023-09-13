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
        return view('sesi-2', [
            'nama_siswa'    => 'Rizky Khapidsyah',
            'umur'          => 19,
            'mataKuliah'    => [
                'Pemrograman Web Lanjut', 
                'Pemrograman Berbasis Objek 1', 
                'Pemrograman Berbasis Objek 2'
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artikel = Artikel::all();

        return $artikel;
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
        return 'ini function show dari DashboardController dengan id ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'ini function edit dari DashboardController dengan id ' . $id;
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
