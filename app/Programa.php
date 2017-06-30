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

    public function users()
    {
       return $this->belongsToMany('App\User');
    }

    public function scopeRoles($query, $rol)
    {
      return $query->with(['user' => function ($query) use ($rol) {
      $query->where('rol', $rol);
    }]);
    }
}
