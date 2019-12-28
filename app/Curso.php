<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    function materia(){
        $this->belongsTo('App\Materia');
    }
}
