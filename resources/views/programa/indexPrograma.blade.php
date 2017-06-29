@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Programa carreras</div>

                <div class="panel-body">
                  @if(count($programas) > 0)
                    <table class="table table-hover">
                       <thead>
                          <th>id</th>
                          <th>Nombre del programa</th>
                          <th>Horario</th>

                         </thead>
                        <body>
                     @foreach ($programas as $programa)
                        <tr>
                          <td>{{$programa->id}}</td>
                          <td>{{$programa->nombre}}</td>
                          <td>{{$programa->horario}}</td>
                        </tr>
                        <tr>
                          <td colspan="3"> @foreach($programa->user as $usuario)
                              <li>{{$usuario->nombre }} {{$usuario->rol}}</li>
                          </td>
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
