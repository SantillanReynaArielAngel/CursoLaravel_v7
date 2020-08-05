<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //RELACION 1 A N NORMAL
    public function taggables()// minuscula_plural_modeloforeano
    {
        return $this->hasMany('App\Taggable');//direccion modeloforeano
    }
}
