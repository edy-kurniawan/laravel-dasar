<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // operasi artimatika
        $total = 200000 + 100000;

        // mengambil data dari database
        // select * from mata_kuliah
        $mata_kuliah = [
            'Pemrograman Web',
            'Pemrograman Berorientasi Objek',
            'Pemrograman Mobile',
        ];

        // mereturn view dengan parsing data
        return view('sesi-2', [
            'nama'          => 'Rizky Khapidsyah',
            'jurusan'       => 'Teknik Informatika',
            'mata_kuliah'   => $mata_kuliah,
            'total'         => $total,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Ini function create yang ada di DashboardController';
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
        return 'Ini function show yang ada di DashboardController dengan id ' . $id;
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
