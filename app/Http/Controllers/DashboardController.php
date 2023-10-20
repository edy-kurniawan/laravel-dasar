<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model Artikel
use App\Models\Artikel;

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
        // mengambil semua data dari tabel artikel
        // select * from artikel
        // Eloquent ORM
        $artikel = Artikel::all();

        Artikel::select('judul', 'isi')->get();

        return view('sesi-4', [
            'artikel' => $artikel,
        ]);
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
