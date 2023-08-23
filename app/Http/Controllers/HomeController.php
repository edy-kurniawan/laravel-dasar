<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('sesi-3');
    }

    public function about(){
        return 'ini adalah halaman about';
    }

    public function contact(){
        return 'ini adalah halaman contact';
    }

}
