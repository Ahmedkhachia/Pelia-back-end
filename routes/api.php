<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group([

    'middleware' => 'api'

], function ($router) {

    //Route of Register
    Route::post('register', 'Auth\RegisterController@create');
    //Route of Login
    Route::post('login', 'Auth\LoginController@login');

     //Route of Contact
     Route::post('contact', 'ContactController@index');

     //Route of Contact
     Route::post('newsletter', 'NewsController@index');

});



// Auth::routes();


