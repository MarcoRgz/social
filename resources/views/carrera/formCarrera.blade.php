@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro carreras</div>
                <div class="panel-body">
                  {!! Form::open(['route' => 'carrera.store']) !!}
                    {!! Form::label('carerra','Carrera')!!}
                    {!! Form::text('carerra')!!}
                    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary'])!!}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
