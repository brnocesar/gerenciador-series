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

        @include('components.form-input', ['type' => 'text',     'required' => 'true', 'name' => 'name',             'label' => 'Nome'])
        @include('components.form-input', ['type' => 'text',     'required' => 'true', 'name' => 'email',            'label' => 'E-mail'])
        @include('components.form-input', ['type' => 'password', 'required' => 'true', 'name' => 'password',         'label' => 'Senha'])
        @include('components.form-input', ['type' => 'password', 'required' => 'true', 'name' => 'confirm_password', 'label' => 'Confirme senha'])

        <div class="d-flex justify-content-center">
            @include('components.button', [
                'type'   => 'submit',
                'margin' => 'mt-3',
                'icon'   => 'fas fa-user-plus', 
                'label'  => 'Criar usuário'
            ])
        </div>
    </form>

</div>

@endsection
