<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    //Show all listing
    public function index()
    {

        // dd(request('tags'));
        return view('listings.index', ['listings' => Listing::latest()->filter(request(['tag']))->get()]);
    }


    //Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }
}
