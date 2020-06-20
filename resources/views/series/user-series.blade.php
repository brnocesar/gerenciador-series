@extends('components.layout')

@section('cabecalho')
    Minhas séries
@endsection

@section('conteudo')

    @include('components.messages.flash')
    @include('components.messages.error')

    <div class="d-flex justify-content-end">
        @include('components.link-button', ['href'=>route('series.page.index'),'color'=>'back-btn', 'margin'=>'mb-2', 'icon'=>'fas fa-arrow-left', 'label'=>'Voltar'])
    </div>

    @include('series.components.grid')

    <script>
        
    </script>

@endsection
