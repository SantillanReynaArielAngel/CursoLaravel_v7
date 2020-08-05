<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //RELACION  NORMAL 1 A N INVERSO
    public function user()//minuscula modeloforeano
    {
        return $this->belongsTo('App\User');//direccion modeloforaneo
    }

    //RELACION POLIMORFICA 1 A N
    public function commentable()//minuscula modeloforaneo+'able'
    {
        return $this->morphTo();
    }
}
