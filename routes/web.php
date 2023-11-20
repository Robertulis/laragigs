<?php
use Illuminate\Http\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\Route;
use App\Models\listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//all listings
Route::get('/', function () {
    return view('listings',[
        'heading'=>'Latest Listings',
        'listings'=> Listing::all()
    ]);
});
//single listing
Route::get('/listings/{id}', function ($id) {
    return view('listing',[
        'listings'=> Listing::find($id)
    ]);
});
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/posts/{id}', function($id){
 
// return response('Post'. $id);
// })-> where('id','[0-9]+');
// Route::get('/search', function(Request $request){
//     return $request->name. '' . $request->city;
// });

