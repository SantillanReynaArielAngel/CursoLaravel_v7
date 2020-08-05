<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    //Valores por defecto de una columna(atributo de una tabla):
    protected $attributes=[
        'is_active' => true,
    ];
}
