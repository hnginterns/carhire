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

Route::get('/contact', function () {
    return view('partials.contact');
});

Route::get('/car-listing', function () {
    return view('partials.car-listing');
});


Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

/*
Index page is route /
*/
// Route::get('/', function () ) {
// 	return view('index');
// }
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


