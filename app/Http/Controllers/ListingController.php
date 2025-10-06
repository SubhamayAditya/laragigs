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

        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }


    //Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }


    //Create form
    public function create()
    {
        return view('listings.create');
    }

    //Store data
    public function store(Request $request)
    {
        // dd($request->all());
        $formfields = $request->validate([
            'title' => 'required|string',
            'company' => 'required|string|unique:listings,company',
            'description' => 'required|string',
            'location' => 'required',
            'website' => 'required',
            'email' => 'required|email|unique:listings,email',
            'tags' => 'required',
        ]);


        Listing::create($formfields);
        return redirect('/')->with('message','Blog created successfully');


    }
}
