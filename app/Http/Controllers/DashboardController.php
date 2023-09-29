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
        // Eloquent ORM
        $artikel = Artikel::all();

        // return data ke view dan parsing data ke view
        return view('user.dashboard', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'ini function create dari DashboardController';
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
        // mengambil data artikel berdasarkan slug
        $artikel = Artikel::where('slug', $id)->first();

        // return data ke view dan parsing data ke view
        return $artikel;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'ini function edit dari DashboardController';
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
