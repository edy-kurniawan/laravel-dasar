<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'ini function index dari HomeController';
    }

    public function about()
    {
        return 'ini function about dari HomeController';
    }

    public function contact()
    {
        return 'ini function contact dari HomeController';
    }
}
