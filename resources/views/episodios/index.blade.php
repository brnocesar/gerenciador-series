@extends('components.layout')

@section('cabecalho')
Episódios da {{$temporada->numero}}<sup>a</sup> Temporada de <i>{{ $temporada->serie->nome }}</i>
@endsection

@section('conteudo')

@include('components.flash-message')

<div class="d-flex justify-content-end">
    <a href="{{ route('listar_temporadas', $temporada->serie->id) }}" class="btn btn-dark mb-2 back-btn">
        <i class="fas fa-backspace mr-2"></i>Voltar
    </a>
</div>

<form method="POST" action="{{ route('assistir_episodios', $temporada->id) }}">
    @csrf

    <ul class="list-group">

        @foreach ($temporada->episodios as $episodio)
            <li class="list-group-item d-flex justify-content-between align-items-center episodios">
                Episódio {{ $episodio->numero }}
                <input type="checkbox" name="episodios[]" value="{{ $episodio->id }}" {{ $episodio->assistido ? 'checked' : '' }}>
            </li>
        @endforeach

    </ul>

    <div class="d-flex justify-content-end mt-2 mb-3">
        @auth
        <button class="btn btn-primary mt-2 mb-2 episodios">
            <i class="fas fa-save mr-2"></i>Salvar
        </button>
        @endauth
    </div>

</form>

@endsection
