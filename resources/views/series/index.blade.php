@extends('components.layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

@include('components.flash-message')

<div class="d-flex justify-content-end">
    <a href="{{ route('adicionar_serie') }}" class="btn btn-success mb-2"><i class="fas fa-plus mr-2"></i>Adicionar</a>
</div>

<ul class="list-group">
    @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span id="nome-serie-{{ $serie->id }}">{{ $serie->nome }}</span>

            @auth
            <div class="input-group w-50" hidden id="input-nome-serie-{{ $serie->id }}">
                <input type="text" class="form-control" value="{{ $serie->nome }}">
                <div class="input-group-append">
                    <button class="btn btn-primary btn-sm" onclick="editarSerie({{ $serie->id }})">
                        <i class="fas fa-check"></i>
                    </button>
                    @csrf
                </div>
            </div>
            @endauth

            <span class="d-flex">

                @auth
                <button class="btn btn-secondary btn-sm mr-1" onclick="toggleInput({{ $serie->id }})">
                    <i class="fas fa-edit"></i>
                </button>
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
    function toggleInput(serieId) {
        const nome = document.getElementById(`nome-serie-${serieId}`);
        const input = document.getElementById(`input-nome-serie-${serieId}`);

        if ( nome.hasAttribute('hidden') ) {
            nome.removeAttribute('hidden');
            input.hidden = true;
        }
        else {
            input.removeAttribute('hidden');
            nome.hidden = true;
        }
    }

    function editarSerie(serieId) {
        let formData = new FormData();

        const nome = document.querySelector(`#input-nome-serie-${serieId} > input`).value;
        const token = document.querySelector('input[name="_token"]').value;

        formData.append('nome', nome);
        formData.append('_token', token);
        const url = `/series/${serieId}/editar-nome`;

        fetch(url, {
            body: formData,
            method: 'POST'
        }).then(() => {
            toggleInput(serieId);
            document.getElementById(`nome-serie-${serieId}`).textContent = nome;
        });
    }
</script>

@endsection
