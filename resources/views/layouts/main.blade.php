<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
     <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                                <img src="/img/Claquete.png" alt="logo">
                </a>
                <ul class="navbar-nav" class="row" >
                    <li class="nav-item" >
                        <a href="/professor" class="nav-link">Professores</a>
                     </li>
                    <li class="nav-item" >
                        <a href="/materia" class="nav-link">Materias</a>
                    </li>
                    <li class="nav-item" >
                        <a href="/aluno" class="nav-link">Alunos</a>
                    </li>
                    <li class="nav-item" >
                        <a href="/filme" class="nav-link">Filmes</a>
                    </li>
                </ul>
            </div>     
     </nav>
    </header>
    @yield("conteudo") 
</body>
</html>