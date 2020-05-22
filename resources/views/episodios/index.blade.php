@extends('components.layout')

@section('cabecalho')
Episódios da {{$temporada->numero}}<sup>a</sup> Temporada de <i>{{ $temporada->serie->nome }}</i>
@endsection

@section('conteudo')

@include('components.messages.flash')
@include('components.messages.error')

<div class="d-flex justify-content-end">
    <a href="{{ route('listar_temporadas', $temporada->serie->id) }}" class="btn btn-dark mb-2 back-btn">
        <i class="fas fa-backspace mr-2"></i>Voltar
    </a>
</div>

<table class="table dt-responsive nowrap bstable">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-left">Título</th>
            <th class="text-center">Assistido</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($temporada->episodios as $episodio)
            <tr>
                <td class="text-center"> {{$episodio->numero}} </td>
                <td class="text-left">-</td>
                <td class="text-center">
                    @auth
                        @if ($episodio->assistido)
                            <i class="fas fa-check-circle"></i>
                        @else
                            <a href="{{ route('episode.action.watch', $episodio->id) }}" class="btn btn-primary mt-2 mb-2 episodios">
                                <i class="fas fa-check-circle"></i>
                            </a>
                        @endif
                    @endauth
                    
                    @guest
                        
                    @endguest
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
