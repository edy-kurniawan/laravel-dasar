<?php

namespace App\Http\Controllers;

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
        // Eloquent ORM
        // SELECT * FROM artikel
        $artikel = Artikel::all();

        // select judul, isi from artikel
        Artikel::select('judul', 'isi')->get();

        return view('artikel.index', [
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
        // move thumbnail ke folder public/thumbnail
        $request->file('thumbnail')->move('thumbnail', $request->file('thumbnail')->getClientOriginalName());

        // slug
        $slug = Str::of($request->judul)->slug('-');

        // simpan data ke dalam tabel artikel
        Artikel::create([
            'judul'     => $request->judul,
            'tanggal'   => $request->tanggal,
            'thumbnail' => $request->file('thumbnail')->getClientOriginalName(),
            'slug'      => $slug,
            'isi'       => $request->isi,
        ]);

        // redirect ke halaman artikel
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Ini function show yang ada di ArtikelController dengan id ' . $id;
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
        // delete artikel
        Artikel::destroy($id);

        // redirect ke halaman artikel
        return redirect()->route('artikel.index');
    }
}
