<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estado;
use App\Categoria;
use App\Matricula;
use App\Aluno;

class MatriculaController extends Controller
{

    public function index()
    {
        //
        $alunos = Aluno::all();
        return view('matricula.index', compact('alunos'))
        ->with('title', 'Matriculas');
    }

    public function create()
    {
        //
        $alunos = Aluno::pluck('nome', 'id');
        $estados = Estado::pluck('descricao', 'id');
        $categorias = Categoria::pluck('descricao', 'id');

        return view('matricula.criar')
        ->with(compact('estados'))
        ->with(compact('categorias'))
        ->with(compact('alunos'))
        ->with('title', 'Nova Matricula');
    }

    public function store(Request $request)
    {
        //

        $matriculas = new matricula;

        $matriculas->alunos_id = $request->alunos_id;
        $matriculas->estados_id = $request->estados_id;
        $matriculas->categorias_id = $request->categorias_id;
		

        $matriculas->save();
        return redirect('matriculas');
    }

    public function show($id)
    {
        //
        $aluno = Aluno::find($id);
        $matricula = Matricula::all();

        return view('matricula.mostrar', compact('aluno'))
        ->with(compact('matricula'))
        ->with('title', 'Aluno - Mostrar');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect('matriculas');
    }
}
