@extends('layout')

@section('cabecalho')
Entrar
@endsection

@section('conteudo')

@include('mensagem')

<div class="container col-6 justify-content-center">

    <form method="POST">
        @csrf

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mb-2 mt-2" style="font-size: 80%">
                <i class="fas fa-sign-in-alt mr-2"></i>Entrar
            </button>
        </div>
    </form>

    <div class="d-flex justify-content-center">
        <a class="btn btn-dark mb-2 mt-2" style="font-size: 80%" href="{{ route('pagina_registro') }}">
            <i class="fas fa-user-plus mr-2"></i>Criar usuário
        </a>
    </div>

</div>

@endsection
