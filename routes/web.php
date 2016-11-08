<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::get('/plare/', 'PlareController@index');

    Route::get('/plare/usuarios', 'PlareController@usuario');
    Route::get('/plare/pensionistas', 'PlareController@pensionistas');



});