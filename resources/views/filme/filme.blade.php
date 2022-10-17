@extends('layouts.main')

@section('titulo','Filme')

@section('conteudo')
<h1> Filmes</h1>
<div id="search-container" class="col-md-12">
    <h2>Busque um filme</h2>     
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form> 
@endsection