<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminUsuarioController extends Controller
{
  public  function asociarPrograma(Request $request)
  {
  $user = User::find($request->input('user_id'));
  $user->programas()->attach($request->input('programa_id'));
    return redirect()->route('usuario.show', $request->input('user_id'));
  }

}
