<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //RELACION NORMAL 1 A 1
    public function profile() //minuscula_modeloforeano
    {
        return $this->hasOne('App\Profile'); //direccion del modelo foreano
    }

    //RELACION NORMAL 1 A N
    
    public function videos()//minuscula_plural_modeloforaneo
    {
        return $this->hasMany('App\Video');//direccion de modeloforaneo
    }
    public function posts()// minuscula_plural_modeloforeano
    {
        return $this->hasMany('App\Post');// direccion modeloforeano
    }
    public function comment()// minuscula_plural_modeloforeano
    {
        return $this->hasMany('App\Comment');//direccion modeloforeano
    }

    //REACION 1 A N INVERSO
    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    //RELACION NORMAL N A N (tendra su inverso)
    public function groups()// minuscula_plural_modeloforeano
    {
        return $this->belongsToMany('App\Group'); //direecion modeloforeano
    }

    //RELACION ATRAVEZ DE 1 A 1 (users->profiles->locations)
    public function profileLocation()// notacion: camelCase, modelointermedio+modelofinal
    {
        return $this->hasOneThrough('App\Location', 'App\Profile');//1er parametro: direccion modelofinal, 2do parametro: direccion modelointermedio
    }

    //RELACION POLIMORFICA 1 A 1 (image-user)
    public function image()//minuscula modeloforaneo
    {
        return $this->morphOne('App\Image','imageable'); //1er parametro:direccion modeloforaneo, 2do parametro: modeloforaneo+'able'
    }
}
