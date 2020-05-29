@extends('components.layout')

@section('cabecalho')
Entrar
@endsection

@section('conteudo')

<div class="container col-md-6 col-lg-6 justify-content-center">

    @include('components.messages.flash')
    @include('components.messages.error')

    <form method="POST">
        @csrf

        @include('components.form-input', ['type' => 'text',     'required' => 'true', 'name' => 'email',    'label' => 'E-mail'])
        @include('components.form-input', ['type' => 'password', 'required' => 'true', 'name' => 'password', 'label' => 'Antiga senha'])

        <div class="d-flex justify-content-center">
            @include('components.button', ['type' => 'submit', 'color' => 'form-auth', 'margin' => 'mb-3 mt-3', 'icon' => 'fas fa-sign-in-alt', 'label' => 'Entrar'])
        </div>
    </form>

    <div class="d-flex justify-content-center">
        @include('components.link-button', ['href' => route('pagina_registro'), 'margin' => 'mb-2 mt-2', 'icon' => 'fas fa-user-plus', 'label' => 'Criar usuário'])
    </div>

</div>

@endsection
