<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use App\Http\Requests;

class RolesController extends Controller{
    public function index(){
        $this->authorize('check_modulo_rol');
        echo "aqui se muestra los roles";
    }
}
