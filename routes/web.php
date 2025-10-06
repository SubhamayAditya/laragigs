<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

//All post
Route::get('/', [ListingController::class,'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->name('create');

//Single post
// Route::get('/listings/{id}',[ListingController::class,'show'] );
Route::get('/listings/{listing}', [ListingController::class, 'show']);
