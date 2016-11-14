<?php

namespace App\Http\Controllers;

use App\UnidadesOperativas;
use DoctrineTest\InstantiatorTestAsset\ExceptionAsset;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use League\Flysystem\Exception;

class UnidadesOperativasController extends Controller{

    public function index($id = null){
        if( $id == null ){
            return UnidadesOperativas::orderBy('id', 'asc')->paginate(20);
        }else{
            return $this->show($id);
        }
    }
    public function show($id){
        return UnidadesOperativas::find($id);
    }
    public function crear(Request $request){
        $reglas = [
            'nombre'        => 'required',
            'direccion'     => 'required',
            'estado'        => 'required',
        ];

        try{
            $validar = Validator::make( $request->all() , $reglas );

            if ( $validar->fails() ){
                return[
                    'creado' => 'no',
                    'mensaje' => $validar->messages()
                ];
            }

            $nueva = new UnidadesOperativas;
            $nueva->nombre          = ($request->nombre != NULL) ? $request->nombre : "";
            $nueva->direccion       = ($request->direccion != NULL) ? $request->direccion : "";;
            $nueva->telefono        = ($request->telefono != NULL) ? $request->telefono : "";;
            $nueva->jefe_ape_pat    = ($request->jefe_ape_pat != NULL) ? $request->jefe_ape_pat : "";;
            $nueva->jefe_ape_mat    = ($request->jefe_ape_mat != NULL) ? $request->jefe_ape_mat : "";;
            $nueva->jefe_nombres    = ($request->jefe_nombres != NULL) ? $request->jefe_nombres : "";;
            $nueva->jefe_telefono   = ($request->jefe_telefono != NULL) ? $request->jefe_telefono : "";;
            $nueva->jefe_email      = ($request->jefe_email != NULL) ? $request->jefe_email : "";;
            $nueva->estado          = ($request->estado != NULL) ? $request->estado : "";;
            $nueva->observacion     = ($request->observacion != NULL) ? $request->observacion : "";;
            $nueva->created_at      = date('Y-m-d H:i:s');
            $nueva->updated_at      = date('Y-m-d H:i:s');

            return[
                'creado' => 'si',
                'mensaje' => $nueva->save()
            ];

        }catch ( Exception $e ){
            \Log::info('Error en crear una Unidad Operativa: '.$e);
            return \Response::json(['creado' => 0], 500);
        }

    }
    public function editar($id = null,Request $request){
        $reglas = [
            'nombre'        => '',
            'direccion'     => '',
            'estado'        => '',
        ];

        try{
            $validar = Validator::make( $request->all() , $reglas );

            if ( $validar->fails() ){
                return[
                    'creado' => 'no',
                    'mensaje' => $validar->messages()
                ];
            }

            $nueva = UnidadesOperativas::find($id);
            if ( $request->nombre != NULL ){ $nueva->nombre = $request->nombre; }
            if ( $request->direccion != NULL ){ $nueva->direccion = $request->direccion; }
            if ( $request->telefono != NULL ){ $nueva->telefono = $request->telefono; }
            if ( $request->jefe_ape_pat != NULL ){ $nueva->jefe_ape_pat = $request->jefe_ape_pat; }
            if ( $request->jefe_ape_mat != NULL ){ $nueva->jefe_ape_mat = $request->jefe_ape_mat; }
            if ( $request->jefe_nombres != NULL ){ $nueva->jefe_nombres = $request->jefe_nombres; }
            if ( $request->jefe_telefono != NULL ){ $nueva->jefe_telefono = $request->jefe_telefono; }
            if ( $request->jefe_email != NULL ){ $nueva->email = $request->jefe_email; }
            if ( $request->estado != NULL ){ $nueva->estado = $request->estado; }
            if ( $request->observacion != NULL ){ $nueva->dni = $request->observacion; }
            $nueva->updated_at      = date('Y-m-d H:i:s');

            return[
                'editado' => 'si',
                'mensaje' => $nueva->save()
            ];

        }catch ( Exception $e ){
            \Log::info('Error en editar una Unidad Operativa: '.$e);
            return \Response::json(['creado' => 0], 500);
        }

    }

}
