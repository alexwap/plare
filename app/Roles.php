<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model{
    protected $table = 'roles';

    protected $fillable = ['nombre', 'descripcion',];

    public function modulos(){
        return $this->belongsToMany('App\Modulos','modulo_rol','rol_id','modulo_id')->withPivot('rol_id');
    }
}
