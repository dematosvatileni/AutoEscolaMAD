@extends('layout.app')

@section('content')

    {!! Form::open(['method' => 'POST', 'url' => 'matriculas', 'class' => 'form-horizontal']) !!}


        <div class="form-group">
            {!! Form::label('alunos_id', 'Estado de Matricula') !!}
            {!! Form::select('alunos_id', $alunos, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('estados_id', 'Estado de Matricula') !!}
            {!! Form::select('estados_id', $estados, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('aulas_id', 'Aulas') !!}
            {!! Form::select('aulas_id', ['key' => '1', 'key2' => '2', 'key3' => '3'], null, ['class' => 'form-control', 'multiple']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('categorias_id', 'Categoria') !!}
            {!! Form::select('categorias_id', $categorias, null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit("Concluir", ['class' => 'btn btn-success btn-block']) !!}
        </div>

    {!! Form::close() !!}

@stop
