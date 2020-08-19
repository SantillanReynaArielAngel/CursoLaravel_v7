<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   //RELACION POLIMORFICA 1 A 1
   public function image()// minuscula modeloforaneo
   {
       return $this->morphOne('App\Image','imageable');//1er parametro: direccion modeloforaneo. 2do parametro: modeloforaneo+'able'
   }

   //RELACION POLIMORFICA 1 A N (COMMENT-POST)
   public function comments()//minuscula_plural_modeloforaneo
   {
       return $this->morphMany('App\Comment','commentable');//1er parametro: direccion_modeloforaneo. 2do parametro: modeloforaneo+'able'
   }

   //RELACION POLIMORFICA N A N (POST-TAG)
   public function tags()// minuscula_plural_modeloforaneo
   {
       return $this->morphToMany('App\Tag','taggable');//1er parametro: direccion modeloforaneo. 2do parametro: singular modeloforaneo+'able' (se aumento una g)
   }

   //REALCION 1 A N INVERSO
   public function categorie()
   {
       return $this->belongsTo('App\Categorie');
   }
   public function user()
   {
       return $this->belongsTo('App\User');
   }
}
