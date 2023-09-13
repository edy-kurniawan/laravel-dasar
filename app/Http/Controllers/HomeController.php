<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'Ini adalah function index yang ada di dalam HomeController.';
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
