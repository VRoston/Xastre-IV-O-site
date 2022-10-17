@extends('layouts.main')

@section('titulo',$aluno->nome)

@section('conteudo')

<div class="col-md-10 offset-md-i">
    <div class=row>
        <div id="info-container" class="col-md-6">
        <h1>{{ $aluno->nome}}</h1>
        
        </div>
    </div>
</div>
@endsection