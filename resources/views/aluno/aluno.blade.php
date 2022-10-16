@extends('layouts.main')

@section('titulo','PUCFlix')

@section('conteudo')
<h1>Alunos</h1>
<a href="/aluno/cadastro">Criar cadastro</a>
<div id="search-container" class="col-md-12">
    <h2>Busque um aluno</h2>     
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>  
</div>
<div id="alunos-container" class="col-md-12">
    <h3>Proximos alunos</h3>
    <div id="cards-container" class="row">
        @foreach($alunos as $aluno)
        <div class="card col-md-3">
            <div class="card-body">
                <p class="card-date">15/10/2022</p>
                <h5 class="card-title">{{ $aluno->nome}}</h5>
                <p class="cards-materia">X materia</p>
                <a href="#" class="btn btn-primary">Mais informações</a>
            </div>           
        </div>    
        @endforeach
    </div>
</div>
    @foreach($alunos as $aluno)
        <p>{{ $aluno->nome}} , {{ $aluno->materia}} , {{ $aluno->filme}}</p>
    @endforeach



@endsection