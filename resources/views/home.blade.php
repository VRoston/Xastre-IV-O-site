@extends('layouts.main')

@section('titulo','PUCFlix')

@section('conteudo')

<div> 
<h1>Alunos</h1>
   <div id="alunos-container" class="card-md-12">
       <div id="cards-container" class="row">

         @foreach($alunos as $Aluno)
        
   <div class="card body col-3">
                <h5 class="card-aluno">Aluno:{{$Aluno->nome}} </h5>
                <h5 class="card-materia">Materias:{{$Aluno->materias}} </h5>
                <h5 class="card-filmes">Filmes:{{$Aluno->filmes}} </h5>
                <a href="/alunos/{{$Aluno->id}}"class= "btn btn-primary">Saber Mais</a>
         </div>
         @endforeach
         
</div>

  

     

</div>






@endsection
