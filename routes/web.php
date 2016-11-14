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
    Route::get('/plare/carga_descuentos_varios', 'PlareController@carga_descuentos_varios');

    Route::get('/cargar/',function (){

        $archivo = 'file/ru/demo.ur';

        $chk_ext = explode(".",$archivo);

        if(strtolower(end($chk_ext)) == "ur") {

            $handle = fopen($archivo, "r");

            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

                DB::table('csv')->insert([
                    [ 'nombre' => $data[0], 'edad' => $data[1] ],
                ]);
            }
            fclose($handle);
            echo "Importación exitosa!"; 

        }else{
            echo "El archivo no tiene la extencion ur";
        }

    });



});