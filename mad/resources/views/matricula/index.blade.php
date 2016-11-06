@extends('layout.app')

@section('content')

        <h2>Matricula - Alunos</h2>
        <hr>
        @foreach($alunos as $aluno)
            <ul>
                <li>
                    <a href="{{ action ('MatriculaController@show', [$aluno->id]) }}">{{ $aluno->nome }}</a>
                </li>
            </ul>
        @endforeach
        <br>

        <a href=" {{ url('alunos/create') }}"> <p>Novo aluno</p></a>

@stop
