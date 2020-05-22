@extends('components.layout')

@section('cabecalho')
    {{trans('labels.headers.welcome')}}
@endsection

@section('conteudo')

@include('components.messages.flash')

@include('components.widgets.general-stats')

<script>
    
</script>

@endsection
