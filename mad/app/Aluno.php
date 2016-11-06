<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $table = 'alunos';

    public function matricula() {

        return $this->hasOne('App\Matricula');
    }
}
