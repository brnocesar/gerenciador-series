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

<ul class="series-grid">
    @foreach ($series as $serie)
        <li>
            <a href="{{ route('listar_temporadas', $serie->id) }}">
                <img src="{{asset('assets/images/laravel3.png')}}" alt="" />
            </a>
            <span>
                <h2>{{ $serie->nome }}</h2>
                <h3>x temporadas (y episódios)</h3>
            </span>
            @auth
                <span class="series-grid-buttons">
                    <form method="post" action="{{ route('deleta_serie', $serie->id) }}"
                        onsubmit="return confirm('Tem certeza que vai excluir {{ addslashes($serie->nome)}}?')"
                    >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></button>
                    </form>

                    <a href="{{-- {{ route('editar_serie', $serie->id) }} --}}" class="btn btn-secondary btn-sm ml-1">
                        <i class="fas fa-plus"></i>
                    </a>
                </span>
            @endauth
        </li>
    @endforeach
</ul>

<script>
    
</script>

@endsection
