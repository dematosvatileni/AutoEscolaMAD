<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Aluno;

class AlunoController extends Controller
{

    public function index()
    {
        //
        return view('aluno.index')
        ->with('title', 'Alunos');
    }


    public function create()
    {
        //
        return view('aluno.criar')
        ->with('title', 'Novo Aluno');
    }


    public function store(Request $request)
    {
        //
        $alunos = new Aluno;

        $alunos->nome = $request->nome;

        $alunos->save();
        return redirect('matriculas/create');
    }


    public function show($id)
    {
        //
        
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
    }
}
