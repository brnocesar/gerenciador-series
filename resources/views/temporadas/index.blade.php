@extends('components.layout')

@section('cabecalho')
Temporadas de <i>{{ $serie->nome }}</i>
@endsection

@section('conteudo')

@include('components.messages.flash')

<div class="d-flex justify-content-end">
    @include('components.link-button', [
        'href'   => route('series.page.index'),
        'color'  => 'back-btn', 
        'margin' => 'mb-2', 
        'icon'   => 'fas fa-arrow-left', 
        'label'  => 'Voltar', 
    ])
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
