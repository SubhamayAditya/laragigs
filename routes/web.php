<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

//All post
Route::get('/', [ListingController::class,'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->name('create');

//Store post
Route::post('/listings', [ListingController::class, 'store']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('edit');

//Update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('update');

//Delete
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->name('delete');

//Single post
// Route::get('/listings/{id}',[ListingController::class,'show'] );
Route::get('/listings/{listing}', [ListingController::class, 'show']);



// --------------Register-----------


//Show register form
Route::get('/register', [UserController::class, 'create']);

//Create new user

Route::post('/users', [UserController::class, 'store']);