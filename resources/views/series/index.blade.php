@extends('components.layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')

@include('components.messages.flash')
@include('components.messages.error')

<div class="d-flex justify-content-end">
    <a href="{{ route('adicionar_serie') }}" class="btn btn-success mb-2 default-button"><i class="fas fa-plus mr-2"></i>Adicionar</a>
    <a href="{{ route('serie.page.create') }}" class="btn btn-success mb-2 default-button ml-2"><i class="fas fa-plus mr-2"></i>(new)</a>
</div>

@include('series.components.grid')

<div id="pagination" class="pagination pagination-rounded justify-content-end mt-3 mb-4">
    {{$series->links( "pagination::bootstrap-4") }}
</div>

<script>
    
</script>

@endsection
