<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol_user;
use App\Roles;
use App\Personal;
use App\Http\Controllers\Auth;

use App\Http\Requests;

class PlareController extends Controller{
    public function __construct(){
    }
    public function index(){
        $rol_user = Rol_user::find( auth()->user()->id );

        $rol = Roles::find($rol_user->rol_id);

        return view('plare.inicio',compact('rol_user','rol'));
    }


    public function usuario(Request $request){
        $this->authorize('check_modulo_usuario');

        $rol_user = Rol_user::find( auth()->user()->id );

        $rol = Roles::find($rol_user->rol_id);

        return view('plare.usuarios',compact('rol_user','rol'));
    }

    public function pensionistas(){

        $this->authorize('check_modulo_pensionistas');

        $rol_user = Rol_user::find( auth()->user()->id );

        $rol = Roles::find($rol_user->rol_id);

        $pensionistas = Personal::where('categoria_personals_id','5')->paginate(10);

        return view('plare.pensionistas',compact('rol_user','rol','pensionistas'));
    }

}
