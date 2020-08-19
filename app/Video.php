<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //RELACION NORMAL 1 A N INVERSO
    public function user()// minuscula modeloforaneo
    {
        return $this->belongsTo('App\User');//direccion modeloforaneo
    }
    public function categorie()// minuscula modeloforaneo
    {
        return $this->belongsTo('App\Categorie');//direccion modeloforaneo
    }


    //RELACION POLIMORFICA 1 A 1
   public function image()// minuscula modeloforaneo
   {
       return $this->morphOne('App\Image','imageable');//1er parametro: direccion modeloforaneo. 2do parametro: modeloforaneo+'able'
   }

   //RELACION POLIMORFICA 1 A N
   public function comments()//minuscula_plural_modeloforaneo
   {
       return $this->morphMany('App\Comment','commentable');//1er parametro: direccion_modeloforaneo. 2do parametro: modeloforaneo+'able'
   }

   //RELACION POLIMORFICA N A N (VIDEO-TAG)
   public function tags()// minuscula_plural_modeloforaneo
   {
       return $this->morphToMany('App\Tag','taggable');//1er parametro: direccion modeloforaneo. 2do parametro: singular modeloforaneo+'able' (se aumento una g)
   }

}
