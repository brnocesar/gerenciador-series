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
        <link href="/css/custom.css" rel="stylesheet" type="text/css"/>
        @stack('css')
        <title>@yield('titulo')</title>
    </head>

    <body>
        @include('components.navbar')

        <div class="container">

            <div class="jumbotron
                @if ( $_SERVER['PATH_INFO'] == '/entrar' ) form-auth @endif
                @if ( $_SERVER['PATH_INFO'] == '/registrar' ) form-register @endif
            ">
                <h1>@yield('cabecalho')</h1>
            </div>

            @yield('conteudo')

        </div>

        @stack('body')
            <script src="/assets/js/vendor.min.js"></script>
    </body>
</html>
