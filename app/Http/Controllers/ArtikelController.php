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
        
        Artikel::select('judul', 'isi')->get();
        
        DB::table('artikel')->get();

        // mengirim data artikel ke view artikel
         return view('sesi-4', [
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
        //
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
