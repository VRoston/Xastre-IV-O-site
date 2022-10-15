<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;


class AlunoController extends Controller
{
   
    public function index() {

        $alunos=Aluno::all();

        return view('home',['alunos' => $alunos] );
    }

    public function create() {

        return view('alunos.create');

    }

    public function store(Request $request) {

        $aluno = new Aluno;

        $aluno->nome = $request->nome;
        $aluno->materias = $request->materias;
        $aluno->filmes = $request->filmes;
        $aluno->imagem = $request->imagem;

        $aluno->save();

        return redirect('/');

    }

    public function show($id){

        $aluno = Aluno::findOrFail($id);

        return view('alunos.show',['aluno'=>$aluno]);
    }
}
