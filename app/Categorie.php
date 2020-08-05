<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
     //RELACION NORMAL 1 A N
     public function videos()// minuscula_plural_modeloforeano
     {
         return $this->hasMany('App\Video');//direccion modeloforeano
     }
    
    public function posts()// minuscula_plural_modeloforeano
    {
        return $this->hasMany('App\Post');//direccion de modelo foraneo
    }
}
