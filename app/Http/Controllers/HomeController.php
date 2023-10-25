<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'ini function index di home controller';
    }

    function about(){
        return 'ini function about di home controller';
    }
}
