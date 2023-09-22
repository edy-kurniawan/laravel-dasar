<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
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
        $artikel = Artikel::all();

        // return data ke view dan mengirim data artikel
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
        // slug
        $slug = Str::of($request->judul)->slug('-');

        // upload thumbnail
        $thumbnail = $request->file('thumbnail');
        $thumbnail->move(public_path('thumbnail'), $thumbnail->getClientOriginalName());

        // simpan data artikel
        // Eloquent ORM
        Artikel::create([
            'judul'     => $request->judul,
            'tanggal'   => $request->tanggal,
            'thumbnail' => $thumbnail->getClientOriginalName(),
            'slug'      => $slug,
            'isi'       => $request->isi,
        ]);

        // redirect ke halaman artikel
        return redirect('/artikel');
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
        return redirect('/artikel');
    }
}
