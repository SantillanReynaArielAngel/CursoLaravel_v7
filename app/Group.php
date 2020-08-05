<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //RELACION NORMAL N A N INVERSO 
    public function users()//minuscula_plural_modeoforeano
    {
        return $this->belongsToMany('App\User'); //drireccion del modeloforeano
    }
}
