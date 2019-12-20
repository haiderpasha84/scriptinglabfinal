<?php

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
    return view('welcome');
});



Route::get('/handgun', function () {
    return view('handgun');
});

Route::get('/shotgun', function () {
    return view('shotgun');
});

Route::get('/womengun', function () {
    return view('womengun');
});

Route::get('/handammo', function () {
    return view('handammo');
});

Route::get('/shotammo', function () {
    return view('shotammo');
});


Route::get('/handpart', function () {
    return view('handpart');
});


Route::get('/shotgunpart', function () {
    return view('shotgunpart');
});
Route::get('/buyform', function () {
    return view('buyform');
});



Route::resource('products', 'ProductController'); 
Route::get('/create', 'ProductController@getcreatepage'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//  Route::post('/products', 'productController@store')->name('products.store');

route::get('/shotgun',function(){
    $shot= App\product::where('idy',1)->get();
    // return $s;
    return view('shotgun',compact('shot'));
});

route::get('/handgun',function(){
    $hand= App\product::where('idy',2)->get();
    // return $s;
    return view('handgun',compact('hand'));
});

route::get('/womengun',function(){
    $women= App\product::where('idy',3)->get();
    // return $s;
    return view('womengun',compact('women'));
});

//  Route::get('/create', 'ProductController@store');
// Route::get('/create', 'ProductController@store');