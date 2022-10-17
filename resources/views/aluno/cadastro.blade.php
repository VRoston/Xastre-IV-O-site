@extends('layouts.main')

@section('titulo','Cadastro')

@section('conteudo')

<div id="aluno-create-container" class="col-md-6 offset-md-3">
    <h1 class="text-center">Cadastro de Alunos</h1> 
    <form action="/aluno" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome"> Aluno:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do aluno" >
        </div>
        <div class="form-group">
            <label for="materia"> Materia:</label>
            <input type="text" class="form-control" id="materia" name="materia" placeholder="Materia do aluno" >
        </div>  
        <div class="form-group">
            <label for="filme"> Filme:</label>
            <input type="text" class="form-control" id="filme" name="filme" placeholder="Filme do aluno" >
        </div> 
        <input type="submit" class="btn btm-primary" value="Registrar aluno"> 
    </form>
</div>

    
@endsection