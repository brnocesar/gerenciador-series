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
                    @if ( auth()->user()->admin == true )
                        <form method="post" action="{{ route('deleta_serie', $serie->id) }}"
                            onsubmit="return confirm('Tem certeza que vai excluir {{ addslashes($serie->nome)}}?')"
                        >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm default-button-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        <form method="post" action="">
                            @csrf
                            <button class="btn btn-sm default-button-danger ml-1 mr-1"><i class="fas fa-edit"></i></button>
                        </form>
                    @endif

                    @if ( !$serie->addedToUser() )
                        <form method="post" action="{{ route('serie.action.add', $serie->id) }}"
                            onsubmit="return confirm('Adiciona {{ addslashes($serie->nome)}} as minhas séries?')"
                        >
                            @csrf
                            <button class="btn btn-sm default-button"><i class="fas fa-plus"></i></button>
                        </form>
                    @endif
                </span>
            @endauth
        </li>
    @endforeach
</ul>