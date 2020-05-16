@extends('components.layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')

@include('components.flash-message')

<div class="d-flex justify-content-end">
    <a href="{{ route('listar_series') }}" class="btn btn-dark mb-2"><i class="fas fa-backspace mr-2"></i>Voltar</a>
</div>

<form method="post" action="{{ route('registra_serie') }}">
    @csrf
    <div class="row">
        <div class="col col-8">
            <label for="nome">Nome</label>
            <input id="nome" type="text" class="form-control" name="nome">
        </div>
        <div class="col col-2">
            <label for="qtd_temporadas">Temporadas</label>
            <input type="number" class="form-control" id="qtd_temporadas" name="qtd_temporadas">
        </div>
        <div class="col col-2">
            <label for="ep_por_temporada">Ep. / temporada</label>
            <input type="number" class="form-control" id="ep_por_temporada" name="ep_por_temporada">
        </div>
    </div>
    <div class="d-flex justify-content-end mt-2">
        <button class="btn btn-primary"><i class="fas fa-save"></i></button>
    </div>
</form>

@endsection
