<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()
                ->filter(request(['tag', 'search']))
                ->paginate(6)
        ]);
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', ['listing' => $listing]);
    }

    // Show create form
    public function create()
    {
        return view('listings.create');
    }

    // Store new listing
    public function store(Request $request)
    {
        // Validate form fields
        $formFields = $request->validate([
            'title' => 'required|string',
            'logo' => 'required|mimes:jpeg,jpg,png|max:2048', // <-- using 'logo' field
            'company' => 'required|string|unique:listings,company',
            'description' => 'required|string',
            'location' => 'required|string',
            'website' => 'required|url',
            'email' => 'required|email|unique:listings,email',
            'tags' => 'required|string',
        ]);

        // Handle file upload
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // Create listing
        Listing::create($formFields);

        return redirect('/')
            ->with('message', 'Listing created successfully!');
    }




    //Show edit form

    public function edit(Listing $listing)
    {
        // dd($listing);
         return view('listings.edit', ['listing' => $listing]);
    }
}
