@extends('components.layout')

@section('cabecalho')
    {{trans('labels.headers.my_account')}}
@endsection

@section('conteudo')

    @include('components.messages.flash')
    @include('components.messages.error')

    <div class="row">
        <div class="col-sm-4 col-lg-4 col-xl-4">

            @include('components.collapsible-card', [
                'cardID' => '1', 'show' => 'true', 'title' => 'Usuário', 'contents' => [
                    ['Nome', $user->name], 
                    ['E-mail', $user->email], 
                    ['Admin', $user->admin], 
                ]
            ])
            @include('components.collapsible-card', ['cardID' => '2', 'title' => 'Titulo 2', 'bg' => 'secondary', 'text' => 'warning'])
            @include('components.collapsible-card', ['cardID' => '3', 'title' => 'Titulo 3', 'bg' => 'success', 'button' => 'Outro nome'])

        </div>

        <div class="col-sm-8 col-lg-8 col-xl-8">
            
            @include('account.components.logs-table')
            @include('account.components.logs-collapsible')

        </div>
    </div>

<script>
    
</script>

@endsection
