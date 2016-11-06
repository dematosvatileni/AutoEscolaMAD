<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    //
    protected $table = 'horarios';

    public function matricula() {

        return $this->hasMany('App\Matricula');
    }
}
