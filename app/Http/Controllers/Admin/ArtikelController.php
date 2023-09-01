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
        // Eloquent ORM
        // select * from artikel
        $data = Artikel::all();

        // mereturn view dan mengirimkan data
        return view('admin.artikel', [
            'data' => $data
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
        // validasi data
        
        // slug
        $slug = Str::of($request->judul)->slug('-');

        // simpan thumbnail ke folder public
        $request->file('thumbnail')->move('thumbnail', $request->file('thumbnail')->getClientOriginalName());

        // ambil nama thumbnail
        $nama_thumbnail = $request->file('thumbnail')->getClientOriginalName();

        // simpan data ke dalam tabel artikel
        // Eloquent ORM
        Artikel::create([
            'judul'     => $request->judul,
            'isi'       => $request->isi,
            'slug'      => $slug,
            'tanggal'   => $request->tanggal,
            'thumbnail' => $nama_thumbnail
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
        $data = Artikel::find($id);

        return $data;
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
        // hapus artikel
        Artikel::destroy($id);

        // redirect ke halaman artikel
        return redirect('/artikel');
    }
}
