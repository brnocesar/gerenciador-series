@extends('components.layout')

@section('cabecalho')
    {{trans('labels.headers.my_account')}}
@endsection

@section('conteudo')

    @include('components.messages.flash')
    @include('components.messages.error')

    <div class="row">
        <div class="col-sm-4 col-lg-4 col-xl-4">

            @include('account.components.card-user',   ['cardID' => '1'])
            @include('account.components.card-logs',   ['cardID' => '2', 'content' => $logs])
            @include('account.components.card-config', ['cardID' => '3', 'text' => 'success'])

        </div>

        <div class="col-sm-8 col-lg-8 col-xl-8">
            
            @include('account.components.logs-table')
            {{-- @include('account.components.logs-collapsible') --}}

        </div>
    </div>

<script>
    
</script>

@endsection
