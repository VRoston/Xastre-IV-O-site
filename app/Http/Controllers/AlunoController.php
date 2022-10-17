<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index() {

        $alunos = Aluno::all(); 

        return view('aluno.aluno',['alunos' => $alunos]);
    }

    public function cadastro(){
        return view('aluno.cadastro'); 
    }

    public function store(Request $request){

        $aluno = new Aluno;

        $aluno->nome = $request->nome;
        $aluno->materia = $request->materia;
        $aluno->filme = $request->filme;

        $aluno->save();

        return redirect('/aluno');
    }
}

