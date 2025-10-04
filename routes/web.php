<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;


Route::get('/', [ListingController::class,'index']);

//Single post

// Route::get('/listings/{id}',[ListingController::class,'show'] );
Route::get('/listings/{listing}', [ListingController::class, 'show']);