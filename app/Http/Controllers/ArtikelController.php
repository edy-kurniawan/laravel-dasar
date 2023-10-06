<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model Artikel
use App\Models\Artikel;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil data dari tabel artikel
        //  select * from artikel
        $artikel = Artikel::all();
        
        // mengirim data artikel ke view artikel
         return view('artikel', [
             'artikel' => $artikel
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // upload thumbnail
        $request->file('thumbnail')->move('thumbnail/', $request->file('thumbnail')->getClientOriginalName());
        
        // insert data ke table artikel
        Artikel::create([
            'judul'     => $request->judul,
            'tanggal'   => $request->tanggal,
            'thumbnail' => $request->file('thumbnail')->getClientOriginalName(),
            'slug'      => $request->isi,
            'isi'       => $request->isi,
        ]);

        // alihkan halaman ke halaman artikel
        return redirect('/artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        // menghapus data artikel berdasarkan id yang dipilih
        Artikel::destroy($id);

        // alihkan halaman ke halaman artikel
        return redirect('/artikel');
    }
}
