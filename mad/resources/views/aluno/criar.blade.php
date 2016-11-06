@extends('layout.app')

@section('content')

    {!! Form::open(['method' => 'POST', 'url' => 'alunos', 'class' => 'form-horizontal']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        </div>

        <!--<div class="form-group">
            {!! Form::label('datanasc', 'Data de Nascimento') !!}
            {!! Form::text('datanasc', null, ['class' => 'form-control']) !!}
        </div>-->

        <div class="form-group">
            {!! Form::submit("Seguinte", ['class' => 'btn btn-success btn-block']) !!}
        </div>

    {!! Form::close() !!}

@stop
