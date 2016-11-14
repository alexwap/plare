<?php

use Illuminate\Http\Request;

/* Route::get('/user', function (Request $request) { return $request->user(); })->middleware('auth:api'); */

/*
 *  GET     /ejemplo        Devuelve una lista
 *  GET     /ejemplo/12     Devuelve un fila específica
 *  POST    /ejemplo        Crea un nueva fila
 *  PUT     /ejemplo/12     Actualiza una fila
 *  PATCH   /ejemplo/12     Actualiza parcialmente una fila
 *  DELETE  /ejemplo/12     Elimina una fila
 * */

Route::group(['middleware' => 'api'], function() {

    // Api usuarios
    Route::GET('plare/usuario/','UsuariosController@index'); //ok
    Route::GET('plare/usuario/{id}','UsuariosController@ver'); //ok
    Route::POST('plare/usuario/crear','UsuariosController@crear'); //ok
    Route::PUT('plare/usuario/reemplazar/{id}','UsuariosController@reemplazar'); //ok

    Route::GET('plare/personal/','PersonalController@index'); //ok
    Route::GET('plare/personal/{id}','PersonalController@index'); //ok
    Route::GET('plare/personal_administrativo/','PersonalController@administrativo');//ok
    Route::GET('plare/personal_administrativo/{id}','PersonalController@administrativo');//ok
    Route::GET('plare/personal_administrativo_contratado/','PersonalController@administrativo_contratado');//ok
    Route::GET('plare/personal_administrativo_contratado/{id}','PersonalController@administrativo_contratado');//ok
    Route::GET('plare/personal_docente/','PersonalController@docente');//ok
    Route::GET('plare/personal_docente/{id}','PersonalController@docente');//ok
    Route::GET('plare/personal_docente_contratado/','PersonalController@docente_contratado');//ok
    Route::GET('plare/personal_docente_contratado/{id}','PersonalController@docente_contratado');//ok
    Route::GET('plare/personal_pensionista/','PersonalController@pensionista');//ok
    Route::GET('plare/personal_pensionista/{id}','PersonalController@pensionista');//ok
    Route::GET('plare/personal/{id}','PersonalController@show');//ok

    Route::POST('plare/personal_add/' , 'PersonalController@crear');
    Route::PUT('plare/personal/{id}', 'PersonalController@update');
    Route::DELETE('plare/personal/{id}', 'PersonalController@delete');

    Route::GET('plare/unidades_operativas/','UnidadesOperativasController@index');
    Route::GET('plare/unidades_operativas/{id}','UnidadesOperativasController@show');
    Route::POST('plare/unidades_operativas/crear','UnidadesOperativasController@crear');
    Route::PUT('plare/unidades_operativas/{id}/editar','UnidadesOperativasController@editar');
    Route::PATCH('plare/unidades_operativas/{id}/modificar','UnidadesOperativasController@editar');

    Route::GET('plare/responsables_unidades_operativas/','ResponsablesUnidadesOperativasController@index');
    Route::GET('plare/responsables_unidades_operativas/{id}','ResponsablesUnidadesOperativasController@show');
    Route::POST('plare/responsables_unidades_operativas/crear','ResponsablesUnidadesOperativasController@crear');
    Route::PUT('plare/responsables_unidades_operativas/{id}/editar','ResponsablesUnidadesOperativasController@editar');
    Route::PATCH('plare/responsables_unidades_operativas/{id}/modificar','ResponsablesUnidadesOperativasController@editar');


});