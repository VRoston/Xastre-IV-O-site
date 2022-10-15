@extends('layouts.main')

@section('titulo','Inserir Aluno')


@section('conteudo')

<div id="aluno-create-container" class="col-md-6 offset md-3">
    <h1>insira o aluno</h1>
    <form action="/alunos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Aluno:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="nome do aluno">
        </div>
        <div class="form-group">
            <label for="nome">materias:</label>
            <input type="text" class="form-control" id="materias" name="materias" placeholder="materias do aluno">
        </div>
        <div class="form-group">
            <label for="nome">filmes:</label>
            <input type="text" class="form-control" id="filmes" name="filmes" placeholder="filmes do aluno">
        </div>
        <div class="form-group">
            <label for="nome">imagem:</label>
            <input type="text" class="form-control" id="imagem" name="imagem" placeholder="URL">
        </div>
        <input type="submit"class="btn btn-primary" value="Inserir Aluno">

    </form>
</div>
@endsection