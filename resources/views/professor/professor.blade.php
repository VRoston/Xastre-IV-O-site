@extends('layouts.main')

@section('titulo','PUCFlix')

@section('conteudo')
<h1>Professores</h1>
<a href="/professor/cadastro">Criar cadastro</a>
<div id="search-container" class="col-md-12">
    <h2>Busque um professor</h2>     
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>  
</div>
<div id="professors-container" class="col-md-12">
    <h3>Proximos professores</h3>
    <div id="cards-container" class="row">
        @foreach($professors as $professor)
        <div class="card col-md-3">
            <div class="card-body">
                <p class="card-date">15/10/2022</p>
                <h5 class="card-title">{{ $professor->nome}}</h5>
                <p class="cards-materia">{{ $professor->materia}}</p>
                <a href="#" class="btn btn-primary">Mais informações</a>
            </div>           
        </div>    
        @endforeach
    </div>
</div>

@endsection