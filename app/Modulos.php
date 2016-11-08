<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{

    protected $table = 'modulos';

    protected $fillable = ['nombre', 'descripcion',];

    public function roles(){
        return $this->belongsToMany('App\Roles','modulo_rol')->withPivot('rol_id');
    }

}
