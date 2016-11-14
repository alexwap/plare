<?php

namespace App\Http\Controllers;

use App\Personal;
use App\User;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use League\Flysystem\Exception;

class PersonalController extends Controller{

    public function index($id = null) {
        if ($id == null) {
            return Personal::orderBy('id', 'asc')->paginate(20);
        } else {
            return $this->show($id);
        }
    }

    public function administrativo($id = null) {
        if ($id == null) {
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','1')->paginate(20);
        } else {
            $id = $id / 1;
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','1')->where('id',$id)->get();
        }
    }
    public function administrativo_contratado($id = null) {
        if ($id == null) {
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','2')->paginate(20);
        } else {
            $id = $id / 1;
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','2')->where('id',$id)->get();
        }
    }
    public function docente($id = null) {
        if ($id == null) {
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','3')->paginate(20);
        } else {
            $id = $id / 1;
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','3')->where('id',$id)->get();
        }
    }
    public function docente_contratado($id = null) {
        if ($id == null) {
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','4')->paginate(20);
        } else {
            $id = $id / 1;
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','4')->where('id',$id)->get();
        }
    }
    public function pensionista($id = null) {
        if ($id == null) {
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','5')->paginate(20);
        } else {
            $id = $id / 1;
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','5')->where('id',$id)->get();
        }
    }
    public function show($id) {
        return Personal::find($id);
    }
    public function crear(Request $request){

        $reglas = [
            'nombre'      => 'required',
            'email'     => 'required|email',
        ];
        try{
            $validar = Validator::make($request->all(),$reglas);

            if ( $validar->fails() ){
                return[
                    'creado' => 'no',
                    'mensaje' => $validar->messages()
                ];
            }

        }catch ( Exception $e ){
            \Log::info('Error en crear usuario: '.$e);
            return \Response::json(['created' => 0], 500);
        }

    }
    public function update($id){

    }
    public function delete($id) {

    }

}