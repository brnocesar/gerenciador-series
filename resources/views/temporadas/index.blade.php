@extends('components.layout')

@section('cabecalho')
Temporadas de <i>{{ $serie->nome }}</i>
@endsection

@section('conteudo')

@include('components.flash-message')

<div class="d-flex justify-content-end">
    <a href="{{ route('listar_series') }}" class="btn btn-dark mb-2 back-btn">
        <i class="fas fa-backspace mr-2"></i>Voltar
    </a>
</div>

<ul class="list-group">
    @foreach ($serie->temporadas as $temporada)
        <li class="list-group-item d-flex justify-content-between align-items-center temporadas">
            <a href="{{ route('listar_episodios', $temporada->id) }}">
                Temporada {{ $temporada->numero }}
            </a>
            <span class="badge badge-success">
                {{ $temporada->getEpisodiosAssistidos()->count() }} / {{$temporada->episodios->count()}}
            </span>
        </li>
    @endforeach
</ul>

@endsection
