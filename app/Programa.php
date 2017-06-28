<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre','horario'];

    public function carrera()
    {
       return $this->belongsTo('App\Carrera');
    }

    public function programas()
    {
       return $this->belongsToMany('App\Programa');
    }
}
