@extends('components.layout')

@section('cabecalho')
    Editar informações de Conta
@endsection

@section('conteudo')

    @include('components.messages.flash')
    @include('components.messages.error')

    <div class="d-flex justify-content-end">
        @include('components.link-button', ['color' => 'back-btn', 'icon' => 'fas fa-arrow-left', 'label' => 'Voltar', 'href' => route('minha_conta')])
    </div>

    
    <form method="POST">
        @csrf
        
        <div class="row">
            <div class="col-7">
    
            @include('components.form-input', ['type' => 'text',     'readonly' => 'true', 'name' => 'name',             'label' => 'Nome',                'value' => $user->name ])
            @include('components.form-input', ['type' => 'text',     'readonly' => 'true', 'name' => 'email',            'label' => 'E-mail',              'value' => $user->email])
            @include('components.form-input', ['type' => 'password', 'required' => 'true', 'name' => 'old_password',     'label' => 'Antiga senha',                               ])
            @include('components.form-input', ['type' => 'password', 'required' => 'true', 'name' => 'new_password',     'label' => 'Nova senha',                                 ])
            @include('components.form-input', ['type' => 'password', 'required' => 'true', 'name' => 'confirm_password', 'label' => 'Confirme a nova senha',                      ])

            <div class="d-flex justify-content-end">
                @include('components.button', [
                    'type'   => 'submit',
                    'margin' => 'mt-3',
                    'icon'   => 'fas fa-save', 
                    'label'  => 'Salvar informações'
                ])
            </div>
    
            </div>

            <div class="col-5">
                <div class="d-flex justify-content-end">
                    @include('components.button', [
                        'type'   => 'submit',
                        'margin' => 'mt-3',
                        'icon'   => 'fas fa-save', 
                        'label'  => 'Salvar imagem'
                    ])
                </div>
            </div>
        </div>

    </form>


<script>
    
</script>

@endsection
