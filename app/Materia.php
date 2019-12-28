<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    function cursos(){
        return $this->hasMany('App\Curso');
    }
}
