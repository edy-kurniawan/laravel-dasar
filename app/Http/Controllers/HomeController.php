<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // mengambil semua data artikel
        $artikel = Artikel::all();

        // return data ke view dan mengirim data ke view
        return view('user.home', [
            'artikel'   => $artikel
        ]);
    }

    public function about(){
        return 'Ini adalah function about yang ada di dalam HomeController.';
    }

    public function contact(){
        return 'Ini adalah function contact yang ada di dalam HomeController.';
    }

    public function blog(){
        return 'Ini adalah function blog yang ada di dalam HomeController.';
    }
}
