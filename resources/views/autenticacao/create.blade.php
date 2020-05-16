@extends('components.layout')

@section('cabecalho')
Criar usuário
@endsection

@section('conteudo')

@include('components.flash-message')

<div class="container col-6 justify-content-center">

    <form method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" required class="form-control">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mb-2 mr-2">
                <i class="fas fa-user-plus mr-2"></i>Criar usuário
            </button>
        </div>
    </form>

</div>

@endsection
