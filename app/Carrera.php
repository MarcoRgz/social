<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
  public $timestamps = false;
  protected $fillable = ['carrera'];

  public function user()
    {
      return $this->belongsTo('App\User');
    }

}
