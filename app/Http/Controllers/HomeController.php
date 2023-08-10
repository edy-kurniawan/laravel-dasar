<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('sesi-3');
    }

    public function belajar(){
        return 'Belajar Laravel di Sesi 3';
    }

    public function belajar2(){
        return 'Belajar Laravel di Sesi 3';
    }
}
