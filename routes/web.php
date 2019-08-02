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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/payment', 'HomeController@payed');
Route::get('/pay', 'Payercontroller@pay');




Route::get('/check', function(){
    return view('checkout');
});

Route::get('/level', 'ChartController@createlevelchart');
Route::get('/funding-graphs', 'ChartController@CreateChart');
Route::get('/well-wisherfunding-graphs', 'ChartController@FundByWell');
Route::get('/progress', 'ChartController@progressTrack');
Route::get('/recommend', 'summuryController@recom');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('home', 'HomeController');
Route::resource('funds', 'fundsTransaction');
Route::resource('summury', 'summuryController');
Route::get('/Registration', 'HomeController@Register')->name('Registration');
