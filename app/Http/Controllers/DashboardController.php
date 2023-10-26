<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// import model Artikel
use App\Models\Artikel;

class DashboardController extends Controller
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

        return view('dashboard', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // mengambil semua data artikel
        // Eloquent => ORM (Object Relational Mapping)
        // select * from artikel
        $artikel = Artikel::all();

        return $artikel;
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
        // mengambil 1 data berdasarkan id
        // Eloquent => ORM (Object Relational Mapping)
        // select * from artikel where id = $id
        $artikel = Artikel::find($id);

        return view('detail', [
            'artikel' => $artikel
        ]);
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
