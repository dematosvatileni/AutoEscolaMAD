<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    //
    protected $table = 'aulas';

    public function matricula() {

        return $this->hasMany('App\Matricula');
    }
}
