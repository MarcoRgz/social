<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
  public $timestamps = false;
  protected $fillable = ['carrera'];

  public function user()
    {
      return $this->hasMany('App\User');
    }

    public function setCarreraAttribute($value)
    {
      $this->attributes['carrera'] = strtoupper($value);
    }

}
