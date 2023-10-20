<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model
use App\Models\Artikel;
// import str
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil data artikel
        $artikel = Artikel::all();

        return view('artikel.index',[
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // pindahkan thumbnail ke folder public
        $request->file('thumbnail')->move(public_path('thumbnail'), $request->file('thumbnail')->getClientOriginalName());

        // slug
        $slug = Str::of($request->judul)->slug('-');

        // menyimpan data artikel
        Artikel::create([
            'judul'     => $request->judul,
            'tanggal'   => $request->tanggal,
            'thumbnail'     => $request->file('thumbnail')->getClientOriginalName(),
            'slug'      => $slug,
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
        //
    }
}
