@extends('components.layout')

@section('cabecalho')
Entrar
@endsection

@section('conteudo')

@include('components.flash-message')

<div class="container col-md-6 col-lg-6 justify-content-center">

    <form method="POST">
        @csrf

        <div class="form-group">
            <label class="form-auth" for="email">E-mail</label>
            <input type="email" name="email" id="email" required class="form-control form-auth">
        </div>

        <div class="form-group">
            <label class="form-auth" for="password">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control form-auth">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mb-3 mt-3 form-auth">
                <i class="fas fa-sign-in-alt mr-2"></i>Entrar
            </button>
        </div>
    </form>

    <div class="d-flex justify-content-center">
        <a class="btn btn-dark mb-2 mt-2 form-register" href="{{ route('pagina_registro') }}">
            <i class="fas fa-user-plus mr-2"></i>Criar usuário
        </a>
    </div>

</div>

@endsection
