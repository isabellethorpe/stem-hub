<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// All listings
Route::get('/', [ListingController::class, 'index']);



// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);


// Show edit form
Route::get('listings/{listing}/edit', [ListingController:: class, 'edit']);

// Update Lisiting
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Lisiting
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Common Resource Routes (naming conventions):
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store = Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing





//  practice
// Route::get('/hello', function(){
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('posts/{id}', function($id){
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name . ' ' . $request->city;

// });
