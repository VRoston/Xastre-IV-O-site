<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index() {

        $professors = Professor::all();

        return view('professor.professor',['professors' => $professors]);
    }

    public function cadastro(){
        return view('professor.cadastro');
    }
    
    public function store(Request $request){

        $professor = new Professor;

        $professor->nome = $request->nome;
        $professor->materia = $request->materia;

        $professor->save();

        return redirect('/professor');
    }
}
