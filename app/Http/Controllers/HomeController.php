<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Default function to handle the home page
    public function index()
    {
        return view('home');
    }

    // Example function to handle about page
    public function about()
    {
        return view('about');
    }
}
