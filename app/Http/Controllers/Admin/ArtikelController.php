<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil semua data artikel
        // Eloquent ORM
        // select * from artikel
        $artikel = Artikel::all();

        // return data ke view dan mengirimkan variabel artikel
        return view('admin.artikel', [
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
        $slug = Str::slug($request->judul, '-');

        // ambil reqest thumbnail dari form lalu pindahkan ke folder public/thumbnail
        $request->thumbnail->move(public_path('thumbnail'), $request->thumbnail->getClientOriginalName());

        // simpan ke dalam database
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
        // mencari data artikel berdasarkan id
        $artikel = Artikel::find($id);

        return $artikel;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'ini function edit';
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
        // hapus artikel berdasarkan id
        Artikel::destroy($id);

        // redirect ke halaman artikel
        return redirect('/artikel');
    }
}
