<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementsController extends Controller
{
    // Default function to handle the advertisements page
    public function index()
    {
        $advertisements = (new Advertisement())
            ->newQuery()
            ->where('status', 1)
            ->orderBy('published_at', 'desc')
            ->paginate(10);


        return view('advertisement.index',
            [
                'advertisements' => $advertisements,
            ]
        );
    }

    // Example function to handle a specific advertisement
    public function show($id)
    {
        return view('advertisements.show', ['id' => $id]);
    }
}
