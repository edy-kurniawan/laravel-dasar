<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil semua data artikel
        $artikel = Artikel::all();
        
        // return data ke view
        return view('admin.artikel', [
            'artikel'   => $artikel
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
        // slug
        $slug = Str::of($request->judul)->slug('-');

        // simpan data ke dalam tabel artikel
        Artikel::create([
            'judul'         => $request->judul,
            'tanggal'       => $request->tanggal,
            'thumbnail'     => 'thumbnail.jpg', 
            'slug'          => $slug,
            'isi'           => $request->isi,
        ]);

        // redirect ke halaman artikel
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
        //
    }
}
