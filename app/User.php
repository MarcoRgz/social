<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $appends = ['numero_programas'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'correo', 'password','codigo','carrera_id','rol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      public function carrera()
      {
        return $this->belongsTo('App\Carrera');
      }

      public function programas()
      {
        return $this->belongsToMany('App\Programa');
      }

      public function getUsuarioCorreoAttribute()
      {
        return $this->nombre . ':  ' . $this->correo;
      }

      public function getNumeroProgramasAttribute()
      {
        $noProgramas = cont($this->programas()->get());
        return $noProgramas;
      }
}
