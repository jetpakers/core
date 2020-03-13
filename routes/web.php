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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('root');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/flights', 'HomeController@showFlights')->name('flights');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faqs', 'HomeController@faqs')->name('faqs');
Route::post('/flights', 'HomeController@showFlights')->name('flights.show');
Route::get('/flight', 'HomeController@showFlight')->name('flight.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'send'], function () {
    Route::get('/', 'SendController@index')->name('send.root');
});
