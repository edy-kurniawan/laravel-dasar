<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'ini adalah method index, dalam controller home.';
    }

    public function contact()
    {
        return 'ini adalah method contact, dalam controller home.';
    }

    public function about()
    {
        return 'ini adalah method about, dalam controller home.';
    }
}
