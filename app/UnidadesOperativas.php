<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadesOperativas extends Model{

    protected $table = 'unidades_operativas';

    protected $fillable = ['nombre', 'direccion','telefono','jefe_ape_pat','jefe_ape_mat','jefe_nombres','jefe_telefono','jefe_email','estado','observacion'];

}
