<?php

namespace App\Http\Controllers;

// import model Artikel
use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil semua data artikel
        // select * from artikel
        // eloquent: ORM (Object Relational Mapping)
        $artikel = Artikel::all();

        // return view dengan parameter artikel
        return view('home', [
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
        // cari data dengan slug yang sesuai
        // select * from artikel where slug = $id limit 1
        $artikel = Artikel::where('slug', $id)->first();

        // return view dengan parameter artikel
        return view('single', [
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
