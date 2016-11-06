<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $table = 'estados';

    public function matricula() {

        return $this->hasMany('App\Matricula');
    }
}
