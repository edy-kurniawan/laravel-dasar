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
        // select * from artikel
        $artikel = Artikel::all();

        return view('admin.artikel', [
            'artikel'   => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artikel = Artikel::with(['kategori'])->get();

        return $artikel;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat slug dari judul artikel
        $slug = Str::of($request->judul)->slug('-');

        // rezie image thumbnail menjadi 300px x 300px

        // move file thumbnail ke folder public/thumbnail
        $request->thumbnail->move(public_path('thumbnail'), $request->thumbnail->getClientOriginalName());
        $nama_thumbnail = $request->thumbnail->getClientOriginalName();

        // simpan data ke dalam tabel artikel
        Artikel::create([
            'judul'     => $request->judul,
            'tanggal'   => $request->tanggal,
            'thumbnail' => $nama_thumbnail,
            'isi'       => $request->isi,
            'slug'      => $slug
        ]);

        // redirect ke halaman artikel
        return redirect('/artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $artikel = Artikel::find($id);

        return $artikel;
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
        // delete artikel berdasarkan id
        Artikel::find($id)->delete();

        // redirect ke halaman artikel
        return redirect('/artikel');
    }
}
