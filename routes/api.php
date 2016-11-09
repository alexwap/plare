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
/*
Route::get('/user', function (Request $request) {
    return $request->user();

})->middleware('auth:api');
*/

Route::group(['middleware' => 'api'], function() {

    Route::GET('plare/pensionistas/','PensionistasController@index');
    Route::GET('plare/pensionistas/{id}','PensionistasController@show');
    //Route::POST('plare/pensionistas/add' , 'PensionistasController@create');
    //Route::PUT('plare/pensionistas/{id}', 'PensionistasController@update');
    //Route::DELETE('plare/pensionistas/{id}', 'PensionistasController@delete');



});