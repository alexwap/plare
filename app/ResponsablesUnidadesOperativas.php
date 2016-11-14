<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResponsablesUnidadesOperativas extends Model
{
    protected $table = 'responsables_unidades_operativas';

    protected $fillable = ['unidad_operativa_id', 'dni','ape_pat','ape_mat','nombres','direccion','telefono1','telefono2','email','estado','observacion'];

}
