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

        // mengirim data artikel ke view artikel
        return view('admin.artikel',[
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // move thumbnail ke folder public/thumbnail
        $request->thumbnail->move(public_path('thumbnail'), $request->thumbnail->getClientOriginalName());

        // slug
        $slug = Str::of($request->judul)->slug('-');

        // simpan ke database
        Artikel::create([
            'judul'         => $request->judul,
            'tanggal'       => $request->tanggal,
            'thumbnail'     => $request->thumbnail->getClientOriginalName(),
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
        // mengambil data artikel berdasarkan id
        $artikel = Artikel::find($id);

        return $artikel;
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
        // menghapus artikel berdasarkan id
        Artikel::destroy($id);

        // redirect ke halaman artikel
        return redirect('/artikel');
    }
}
