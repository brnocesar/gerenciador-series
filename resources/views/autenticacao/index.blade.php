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

        <div class="form-group">
            <label class="form-auth" for="email">E-mail</label>
            <input type="email" name="email" id="email" required class="form-control form-auth">
        </div>

        <div class="form-group">
            <label class="form-auth" for="password">Senha</label>
            <input type="password" name="password" id="password" required min="1" class="form-control form-auth">
        </div>

        <div class="d-flex justify-content-center">
            @include('components.button', [
                'type'   => 'submit',
                'color'  => 'form-auth', 
                'margin' => 'mb-3 mt-3',
                'icon'   => 'fas fa-sign-in-alt', 
                'label'  => 'Entrar'
            ])
        </div>
    </form>

    <div class="d-flex justify-content-center">
        @include('components.link-button', [
            'href'   => route('pagina_registro'),
            'color'  => 'form-register', 
            'margin' => 'mb-2 mt-2', 
            'icon'   => 'fas fa-user-plus', 
            'label'  => 'Criar usuário', 
        ])
    </div>

</div>

@endsection
