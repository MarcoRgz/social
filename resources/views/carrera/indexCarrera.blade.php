@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Programa carreras</div>

                <div class="panel-body">
                  @if(count($carreras) > 0)
                    <table class="table table-hover">
                       <thead>
                          <th>id</th>
                          <th>Carrera</th>
                         </thead>
                        <body>
                     @foreach ($carreras as $carrera)
                        <tr>
                          <td>{{ $carrera->id}}</td>
                          <td>{{ $carrera->carrera}}</td>
                        </tr>
                      @endforeach
                    </body>
                    </table>
                    @else
                    <span> No hay carreras</span>
                    @endif

                    <a href="{{ route('carrera.create') }}" class="btn btn-success"> Nueva carrera</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
