<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="/assets/images/favicon.ico">
        @stack('components')
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css"/>
        <link href="/css/custom.css" rel="stylesheet" type="text/css"/>
        @stack('css')
        <title>@yield('titulo')</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top d-flex">
            <div class="container d-flex">
                <a class="navbar-brand" href="#">brnocesar</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="container navbar-nav mr-auto">
                        <span class="navbar-cont">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('listar_series') }}">Séries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Filmes</a>
                            </li>
                        </span>

                        <span class="navbar-user">
                            @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <strong>{{ Auth::user()->name }}</strong>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item disabled" href="#">Conta</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="{{-- dropdown-item --}} navi-link btn btn-danger" href="{{ route('deslogar') }}">
                                        <i class="fas fa-sign-out-alt mr-2"></i>Sair
                                    </a>
                                </div>
                            </li>
                            @endauth
                            
                            @guest
                            <li class="nav-item dropdown">
                                <span>
                                    <a class="navi-link btn btn-light mb-2 mr-2" href="{{ route('pagina_registro') }}">
                                        <i class="fas fa-user-plus mr-2"></i>Criar usuário
                                    </a>
                                    <a class="navi-link btn btn-success mb-2 mr-2" href="{{ route('deslogar') }}">
                                        <i class="fas fa-sign-in-alt mr-2"></i>Entrar
                                    </a>
                                </span>
                            </li>
                            @endguest
                        </span>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="jumbotron">
                <h1 style="color: black">@yield('cabecalho')</h1>
            </div>

            @yield('conteudo')

        </div>

        @stack('body')
            <script src="/assets/js/vendor.min.js"></script>
        @stack('js')
            <script src="/assets/js/app.min.js"></script>
    </body>
</html>
