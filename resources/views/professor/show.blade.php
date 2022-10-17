@extends('layouts.main')

@section('titulo',$professor->nome)

@section('conteudo')

<div class="col-md-10 offset-md-i">
    <div class=row>
        <div id="info-container" class="col-md-6">
        <h1>{{ $professor->nome}}</h1>
        
        </div>
    </div>
</div>
@endsection