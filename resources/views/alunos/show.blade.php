@extends('layouts.main')

@section('titulo', $aluno->nome)


@section('conteudo')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class ="col-md-6">
            <img src="{{$aluno->imagem}}"class="img-fluid" alt="{{$aluno->nome}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$aluno->nome}}</h1>
            <h2>Materias:</h2>
            <p class="aluno-materias">{{$aluno->materias}}</p>
            <h3>Filmes:</h3>
            <p class="aluno-filmes">{{$aluno->filmes}}</p>
        </div>
    </div>
</div>


@endsection