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

Route::get('/single-car', function () {
    return view('partials.single-car');
});
Route::get('/faq', function () {
    return view('partials.faq');
});

Route::get('/driver-info', function () {
    return view('partials.driver-info');
});

Route::get('/locations', function () {
    return view('partials.locations');
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
Route::resource('/contact-form', 'ContactController');
Route::resource('/car', 'CarController');
// Route::post('/contact-form', 'ContactController@store');


