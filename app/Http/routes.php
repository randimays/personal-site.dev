<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/resume', 'HomeController@resume');
Route::get('/contact', 'HomeController@contact');

// Design
Route::get('/design', 'HomeController@design');
Route::get('/portfolio/livingston', 'PortfolioController@livingston');
Route::get('/portfolio/goodHousekeeping', 'PortfolioController@goodHousekeeping');

// Development
Route::get('/development', 'HomeController@development');
Route::get('/portfolio/weatherMap', 'PortfolioController@weatherMap');
Route::get('/portfolio/jsCalculator', 'PortfolioController@jsCalculator');
Route::get('/portfolio/simpleArcher', 'PortfolioController@simpleArcher');