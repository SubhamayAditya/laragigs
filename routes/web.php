<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view(
        'listings', [ 'listing' => Listing::all() ]
    );
});

//Single post

Route::get('/listings/{id}', function ($id) {

$listing= Listing::find($id);


if($listing){
  return view('listing',[
            'listing' => Listing::find($id)
        ]
    );  
}
else{
    abort('404');
}

    // return view('listing',[
    //         'listing' => Listing::find($id)
    //     ]
    // );
});
