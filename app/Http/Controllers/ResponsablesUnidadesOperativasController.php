<?php

namespace App\Http\Controllers;

use App\ResponsablesUnidadesOperativas;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class ResponsablesUnidadesOperativasController extends Controller{
    public function index($id = null){
        if( $id == null ){
            return ResponsablesUnidadesOperativas::orderBy('id', 'asc')->paginate(20);
        }else{
            return $this->show($id);
        }
    }
    public function show($id){
        return ResponsablesUnidadesOperativas::find($id);
    }
    public function crear(Request $request){
        $reglas = [
            'unidad_operativa_id'   => 'required',
            'dni'                   => 'required|size:8',
            'ape_pat'               => 'required',
            'ape_mat'               => 'required',
            'nombres'               => 'required',
            'estado'                => 'required',
        ];

        try{
            $validar = Validator::make( $request->all() , $reglas );

            if ( $validar->fails() ){
                return[
                    'creado' => 'no',
                    'mensaje' => $validar->messages()
                ];
            }

            $nueva = new ResponsablesUnidadesOperativas;
            $nueva->unidad_operativa_id          = ($request->unidad_operativa_id != NULL) ? $request->unidad_operativa_id : "";
            $nueva->dni             = ($request->dni != NULL) ? $request->dni : "";
            $nueva->ape_pat         = ($request->ape_pat != NULL) ? $request->ape_pat : "";
            $nueva->ape_mat         = ($request->ape_mat != NULL) ? $request->ape_mat : "";
            $nueva->nombres         = ($request->nombres != NULL) ? $request->nombres : "";
            $nueva->direccion       = ($request->direccion != NULL) ? $request->direccion : "";
            $nueva->telefono1       = ($request->telefono1 != NULL) ? $request->telefono1 : "";
            $nueva->telefono2       = ($request->telefono2 != NULL) ? $request->telefono2 : "";
            $nueva->email           = ($request->email != NULL) ? $request->email : "";
            $nueva->estado          = ($request->estado != NULL) ? $request->estado : "";
            $nueva->observacion     = ($request->observacion != NULL) ? $request->observacion : "";
            $nueva->created_at      = date('Y-m-d H:i:s');
            $nueva->updated_at      = date('Y-m-d H:i:s');

            return[
                'creado' => 'si',
                'mensaje' => $nueva->save()
            ];

        }catch ( Exception $e ){
            \Log::info('Error en crear Responasble Unidad Operativa: '.$e);
            return \Response::json(['creado' => 0], 500);
        }

    }
    public function editar($id = null,Request $request){
        $reglas = [
            'dni'                   => 'size:8',
        ];

        try{
            $validar = Validator::make( $request->all() , $reglas );

            if ( $validar->fails() ){
                return[
                    'creado' => 'no',
                    'mensaje' => $validar->messages()
                ];
            }

            $nueva = ResponsablesUnidadesOperativas::find($id);

            if ( $request->dni != NULL ){ $nueva->dni = $request->dni; }
            if ( $request->ape_pat != NULL ){ $nueva->ape_pat = $request->ape_pat; }
            if ( $request->ape_mat != NULL ){ $nueva->ape_mat = $request->ape_mat; }
            if ( $request->nombres != NULL ){ $nueva->nombres = $request->nombres; }
            if ( $request->direccion != NULL ){ $nueva->direccion = $request->direccion; }
            if ( $request->telefono1 != NULL ){ $nueva->telefono1 = $request->telefono1; }
            if ( $request->telefono2 != NULL ){ $nueva->telefono2 = $request->telefono2; }
            if ( $request->email != NULL ){ $nueva->email = $request->email; }
            if ( $request->estado != NULL ){ $nueva->estado = $request->estado; }
            if ( $request->observacion != NULL ){ $nueva->dni = $request->observacion; }
            $nueva->updated_at      = date('Y-m-d H:i:s');

            return[
                'editado' => 'si',
                'mensaje' => $nueva->save()
            ];

        }catch ( Exception $e ){
            \Log::info('Error en crear Responasble Unidad Operativa: '.$e);
            return \Response::json(['creado' => 0], 500);
        }

    }
}
