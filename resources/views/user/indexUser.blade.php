@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Programa carreras</div>

                <div class="panel-body">
                  @if(count($usuarios) > 0)
                    <table class="table table-hover">
                       <thead>
                          <th>id</th>
                          <th>Codigo</th>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Carrera</th>
                          <th>Rol</th>
                         </thead>
                        <body>
                     @foreach ($usuarios as $user)
                        <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->codigo}}</td>
                          <td>{{$user->nombre}}</td>
                          <td>{{$user->correo}}</td>
                          <td>{{$user->carrera->carrera}}</td>               
                          <td>{{$user->rol}}</td>
                        </tr>
                      @endforeach
                    </body>
                    </table>
                    @else
                    <span> No hay carreras</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
