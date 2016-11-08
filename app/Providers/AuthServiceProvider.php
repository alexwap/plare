<?php

namespace App\Providers;

use App\Rol_user;
use App\Modulo_rol;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider{

    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('check_modulo_usuario', function (User $user) {
            $ru = Rol_user::find( $user->id );
            $s = DB::table('modulo_rol')->where('rol_id', $ru->rol_id)->where('modulo_id', 1 )->limit(1)->get();
            foreach ($s as $ss){
                if($ss->id != ""){ return TRUE; }
                else{ return FALSE; }
            }
        });

        Gate::define('check_modulo_rol', function (User $user) {
            $ru = Rol_user::find( $user->id );
            $s = DB::table('modulo_rol')->where('rol_id', $ru->rol_id)->where('modulo_id', 2 )->limit(1)->get();
            foreach ($s as $ss){
                if($ss->id != ""){ return TRUE; }
                else{ return FALSE; }
            }
        });

        Gate::define('check_modulo_pensionistas', function (User $user) {
            $ru = Rol_user::find( $user->id );
            $s = DB::table('modulo_rol')->where('rol_id', $ru->rol_id)->where('modulo_id', 9 )->limit(1)->get();
            foreach ($s as $ss){
                if($ss->id != ""){ return TRUE; }
                else{ return FALSE; }
            }
        });

    }
}
/**
#   -Modulos-
1	Usuarios
2 	Roles
3 	Permisos
4 	Modulos
5 	Planilla Administrativo
6 	Planilla Administrativo Contratado
7 	Planilla Docente
8 	Planilla Docente Contratado
9 	Planilla Pensionistas
 * */