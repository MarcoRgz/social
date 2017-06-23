@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro carreras</div>
                <div class="panel-body">
                  @if(isset($carrera))
                    {!! Form::model($carrera, ['route' => ['carrera.update', $carrera->id], 'method' => 'patch']) !!}
                    @else
                  {!! Form::open(['route' => 'carrera.store']) !!}
                    @endif
                    {!! Form::label('carerra','Carrera') !!}
                    {!! Form::text('carrera', null) !!}
                    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close()!!}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
