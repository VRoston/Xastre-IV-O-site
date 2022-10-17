@extends('layouts.main')

@section('titulo','Cadastro')

@section('conteudo')

<div id="professor-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Professores</h1> 
    <form action="/professor" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome"> Professor:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do professor" >
        </div>
        <div class="form-group">
            <label for="materia"> Materia:</label>
            <input type="text" class="form-control" id="materia" name="materia" placeholder="Materia do professor" >
        </div>  
        <input type="submit" class="btn btm-primary" value="Registrar professor"> 
    </form>
</div>
    
@endsection