<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Ini function index yang ada di HomeController';
    }

    public function about()
    {
        return 'Ini function about yang ada di HomeController';
    }

    public function contact()
    {
        return 'Ini function contact yang ada di HomeController';
    }
}
