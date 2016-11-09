<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;

use App\Http\Requests;

class PensionistasController extends Controller{

    public function index($id = null) {
        if ($id == null) {
            return Personal::orderBy('id', 'asc')->where('categoria_personals_id','5')->paginate(20);
        } else {
            return $this->show($id);
        }
    }
    public function show($id) {
        return Personal::find($id);
    }

    public function create(Request $request){
        $input = $request->all();
        $create = Personal::create($input);
        return response($create);
    }

    public function update($id){
        $personas = Personal::find($id);
        return response($personas);
    }

    public function delete($id) {
        $personal = Personal::find($id);
        $personal->delete();
        return " Se borro satisfactoriamente al usuario #".$id.".";
    }

}