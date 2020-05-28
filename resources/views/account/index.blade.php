@extends('components.layout')

@section('cabecalho')
    {{trans('labels.headers.my_account')}}
@endsection

@section('conteudo')

    @include('components.messages.flash')
    @include('components.messages.error')

    <div class="row">
        <div class="col-sm-4 col-lg-4 col-xl-4">

            @include('account.components.card-user', [
                'cardID'   => '1', 
                'contents' => [
                    'name' => $user->name, 
                    'email' => $user->email, 
                    'admin' => $user->admin, 
                ]
            ])
            @include('account.components.card-logs', [
                'cardID' => '2', 
                'title' => 'Últimas ações', 
                'text' => 'warning',
                'href' => route('listar_logs_user'),
                'contents' => $logs
            ])
            {{-- @include('components.collapsible-card', ['cardID' => '3', 'title' => 'Titulo 3', 'bg' => 'success', 'button' => 'Outro nome']) --}}

        </div>

        <div class="col-sm-8 col-lg-8 col-xl-8">
            
            @include('account.components.logs-table')
            {{-- @include('account.components.logs-collapsible') --}}

        </div>
    </div>

<script>
    
</script>

@endsection
