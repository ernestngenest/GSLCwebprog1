<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('listings',[
        'Heading' => 'Leatest Listings',
        'listings' => Listing::data()
    ]);
});


Route::get('listings/{listing}', function (Listing $listing) {

    if ($listing){
        return view ('listing' ,['listing' => $listing]);
    }
    else {
        abort('404');
    }
});



Route::get('/hello',function () {
    return response('hello')
    -> header('content-type', 'text/plain');
});


Route::get('/posts/{id}',function ($id) {
    ddd($id);
    return response('post',$id)->where('id', '[0-9]+');
});

Route::get('/search',function(Request $request){
    return $request->name . " " . $request->city;
});
