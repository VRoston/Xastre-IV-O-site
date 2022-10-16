@extends('layouts.main')

@section('titulo','PUCFlix')

@section('conteudo')
<h1> Materias</h1>
<div id="search-container" class="col-md-12">
    <h2>Busque uma Materia</h2>     
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form> 
</div>

@endsection