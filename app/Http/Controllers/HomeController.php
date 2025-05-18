<?php

namespace App\Http\Controllers;

use App\Models\AdvertisementCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Default function to handle the home page
    public function index()
    {
        //get all catagory which status is 1
        $categories = (new AdvertisementCategory())
            ->newquery()
            ->where('status', 1)
            ->take(6)
            ->get();

        return view('home', compact('categories'));
    }

    // Example function to handle about page
    public function about()
    {
        return view('about');
    }
}
