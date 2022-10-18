@extends('layouts.main')

@section('titulo','PUCFlix')

@section('conteudo')

<div id = "search-container" class="col-md-12">
    <h1>Bem-vindo(a) ao Banco de Dados PUCFlix</h1>
</div>
<div id ="events-container" class="col-md-12">
    <h2>Informações</h2>
    <p>- Este banco de dados contém informações sobre Professores, Matérias, Alunos e Filmes.</p>
    <p>- Para acessar tais dados, selecione no canto superior direito da página o tópico desejado</p>
    <p>- A opção "Professores", leva o usuário à página que contém dados sobre os professores já cadastrados. Nela, também é possível cadastrar novos professores ao pressionar a opção "Criar cadastro", para obter mais informações e relacionar atualizações cadastrais.</p>
    <p>- A opção "Materias", leva o usuário à página para a realização de uma busca das matérias cadastradas.</p>
    <p>- A opção "Alunos", leva o usuário à página que contém dados sobre os alunos já cadastrados. Nela, também é possível cadastrar novos alunos ao pressionar a opção "Criar cadastro", para obter mais informações e relacionar atualizações cadastrais. </p>
    <p>- A opção "Filmes", leva o usuário a página para a realização de uma busca dos filmes cadastrados</p>
</div>

@endsection