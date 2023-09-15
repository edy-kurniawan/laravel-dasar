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
        // Eloquent => ORM (Object Relational Mapping)
        // select * from artikel
        $artikel = Artikel::all();

        Artikel::select('judul', 'tanggal')->get();

        // return data ke view dan passing data ke view
        return view('admin.artikel',[
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
        // membuat slug dari judul
        $slug = Str::of($request->judul)->slug('-');

        // upload thumbnail
        $thumbnail = $request->file('thumbnail');
        $thumbnail->move(public_path('thumbnail'), $thumbnail->getClientOriginalName());

        // menyimpan ke tabel artikel
        Artikel::create([
            'judul'     => $request->judul,
            'tanggal'   => $request->tanggal,
            'thumbnail' => $thumbnail->getClientOriginalName(),
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
        // mengambil data artikel berdasarkan id
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
        // menghapus artikel berdasarkan id
        Artikel::destroy($id);

        // redirect ke halaman artikel
        return redirect()->route('artikel.index');
    }
}
