<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>@yield('titulo')</title>
</head>
<body>
<div class="container">
        <header>
            <nav class="nav nav-pills flex-column flex-sm-row mt-5 ">
                <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="/">home</a>
                <a class="flex-sm-fill text-sm-center nav-link "   href="/cadastro/criar">Novo cadastro</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="#"></a>
                <a class="flex-sm-fill text-sm-center nav-link disabled"></a>
            </nav>
        </header>
        <div class="main mt-5">
            @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
            @endif

            @yield("conteudo")
        </div>
    </div>


</body>
</html>
