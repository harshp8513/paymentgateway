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
    return view('home');
});

Route::get('login', 'AuthenticationController@login');
Route::get('register', 'AuthenticationController@register');

Route::get('pricing', 'PricingController@pricing');

Route::get('borderless', function () {
    return view('borderless');
});

Route::post('API/addUser', 'UserController@addUser');
Route::get('API/typeOfBusiness', 'TypeOfBusinessController@getBusinessType');

Route::get('API/GetCountries', 'LocationController@GetCountries');
Route::get('API/GetStates', 'LocationController@GetStates');
Route::get('API/GetStates/{CountryID}', 'LocationController@GetStatesByID');


Route::post('API/addfund', 'FundController@addfund');
