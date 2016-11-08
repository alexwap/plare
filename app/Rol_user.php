<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol_user extends Model
{
    protected $table = 'rol_user';

    protected $fillable = ['rol_id', 'user_id',];

}
