<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //RELACION POLIMORFICA 1 A 1
    public function imageable()//minuscula nombremodelo+"able"
    {
        return $this->morphTo();
    }
}
