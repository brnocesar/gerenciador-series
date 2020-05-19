@extends('components.layout')

@section('cabecalho')
Criar usuário
@endsection

@section('conteudo')

@include('components.messages.flash')
@include('components.messages.error')

<div class="container col-md-6 col-lg-6 justify-content-center">

    <form method="POST">
        @csrf

        <div class="form-group">
            <label class="form-register" for="name">Nome</label>
            <input type="text" name="name" id="name" required class="form-control form-register">
        </div>

        <div class="form-group">
            <label class="form-register" for="email">E-mail</label>
            <input type="email" name="email" id="email" required class="form-control form-register">
        </div>

        <div class="form-group">
            <label class="form-register" for="password">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control form-register">
        </div>

        <div class="form-group">
            <label class="form-register" for="confirm_password">Confirme senha</label>
            <input type="password" name="confirm_password" id="confirm_password" required min="1" class="form-control form-register">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-3 form-register">
                <i class="fas fa-user-plus mr-2"></i>Criar usuário
            </button>
        </div>
    </form>

</div>

@endsection
