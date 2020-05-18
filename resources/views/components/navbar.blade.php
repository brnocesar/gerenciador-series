<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="https://brnocesar.github.io/">brnocesar</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container collapse navbar-collapse align-content-center" id="navbarSupportedContent">
            <ul class="container navbar-nav mr-auto">
                <span class="navbar-cont">
                    <li class="nav-item 
                        @if ( $_SERVER['REQUEST_URI'] == '/' ) active @endif
                    ">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item 
                        @if ( explode('/', $_SERVER['REQUEST_URI'])[1] == 'series' ) active @endif
                    ">
                        <a class="nav-link" href="{{ route('listar_series') }}">Séries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Filmes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTeste" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                            Teste
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownTeste">
                            <a class="dropdown-item disabled" href="#">Teste 1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item disabled" href="#">Teste 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item disabled" href="#">Teste 3</a>
                        </div>
                    </li>
                </span>

                <span class="navbar-user">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <strong>{{ Auth::user()->name }}</strong>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownUser">
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
                        <span class="navbar-guest">
                            <a class="navi-link btn btn-light btn-sm mb-2 mr-2 form-register" href="{{ route('pagina_registro') }}">
                                <i class="fas fa-user-plus mr-2"></i>Criar usuário
                            </a>
                            <a class="navi-link btn btn-success btn-sm mb-2 mr-2 form-auth" href="{{ route('pagina_login') }}">
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