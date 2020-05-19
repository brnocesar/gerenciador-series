@extends('components.layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

@include('components.messages.flash')
@include('components.messages.error')

<div class="d-flex justify-content-end">
    <a href="{{ route('adicionar_serie') }}" class="btn btn-success mb-2 series"><i class="fas fa-plus mr-2"></i>Adicionar</a>
</div>

<ul class="list-group">
    @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center series">
            <span id="nome-serie-{{ $serie->id }}">{{ $serie->nome }}</span>

            <span class="d-flex">

                @auth
                <a href="{{-- {{ route('editar_serie', $serie->id) }} --}}" class="btn btn-secondary btn-sm mr-1">
                    <i class="fas fa-edit"></i>
                </a>
                @endauth

                <a href="{{ route('listar_temporadas', $serie->id) }}" class="btn btn-info btn-sm mr-1">
                    <i class="fas fa-external-link-alt"></i>
                </a>

                @auth
                <form method="post" action="{{ route('deleta_serie', $serie->id) }}"
                    onsubmit="return confirm('Tem certeza que vai excluir {{ addslashes($serie->nome)}}?')"
                >
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </form>
                @endauth

            </span>

        </li>
    @endforeach
</ul>

<script>
    
</script>

@endsection
