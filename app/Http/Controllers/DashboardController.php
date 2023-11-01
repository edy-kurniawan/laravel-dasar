<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return 'ini function index di DashboardController';
    }

    public function contact()
    {
        return 'ini function contact di DashboardController';
    }

    public function about()
    {
        return 'ini function about di DashboardController';
    }
}
