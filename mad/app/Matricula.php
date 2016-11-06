<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    //
    protected $table = 'matriculas';


    public function categoria() {

        return $this->belongsTo('App\Categoria');
    }

    public function estado() {

        return $this->belongsTo('App\Estado');
    }

    public function aula() {

        return $this->belongsTo('App\Aula');
    }

    public function aluno() {

        return $this->belongsTo('App\Aluno');
    }
}
