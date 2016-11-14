<?php

namespace App\Http\Controllers;

use App\User as user;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;

class UsuariosController extends Controller{

    public function index($id = null) {
        if ($id == null) {
            return User::orderBy('id', 'asc')->paginate(20);
        } else {
            return $this->ver($id);
        }
    }
    public function ver($id){
        $id = $id / 1;
        return User::orderBy('id', 'asc')->where('id',$id)->get();
    }

    public function crear(Request $request){
        $reglas = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ];
        try{
            $validar = Validator::make($request->all(),$reglas);
            if ( $validar->fails() ){
                return[
                    'creado' => 'no',
                    'mensaje' => $validar->messages()
                ];
            }

            $nuevo_usuario = new user;
            $nuevo_usuario->name = $request->name;
            $nuevo_usuario->email = $request->email;
            $nuevo_usuario->password = bcrypt( $request->password );
            $nuevo_usuario->created_at = date('Y-m-d H:i:s');
            $nuevo_usuario->updated_at = date('Y-m-d H:i:s');

            return[
                'creado' => 'si',
                'mensaje' => $nuevo_usuario->save()
            ];

        }catch ( Exception $e ){
            \Log::info('Error en crear usuario: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }



}