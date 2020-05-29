<div class="col-12">
    <div class="card">
        <div class="card-header bg-{{ $bg ?? 'secondary'}}  text-bg-{{ $text ?? 'white'}} d-flex justify-content-between align-items-center">

            <h5 class="text-white">Usuário</h5>
            <span>
                <a href="{{ route('account.page.edit-password') }}" role="button" class="btn text-{{ $text ?? 'white'}}">
                    <i class="fas fa-key"></i>
                </a>
                <a href="{{ $href ?? '#' }}" role="button" class="btn text-{{ $text ?? 'white'}}">
                    <i class="fas fa-portrait mr-2"></i>
                </a>
                <a data-toggle="collapse" href="#collapse{{ $cardID ?? '' }}" role="button" aria-expanded="false"
                    aria-controls="collapse{{ $cardID ?? '' }}" class="text-{{ $text ?? 'white'}}">
                    <i class="mdi mdi-window-minimize"></i>
                </a>
            </span>
        </div>

        <div id="collapse{{ $cardID ?? '' }}" class="collapse show">
            <div class="card">

                @if ( isset($user) )
                    <table class="table-card">
                        <tbody>
                            <tr>
                                <td class="text-center font-13 card-p td-date">Nome</td>
                                <td class="text-left td-action"><span>{{ $user->name }}</span></td>
                            </tr>
                            <tr>
                                <td class="text-center font-13 card-p td-date">E-mail</td>
                                <td class="text-left td-action"><span>{{ $user->email }}</span></td>
                            </tr>
                            <tr>
                                <td class="text-center font-13 card-p td-date">Admin</td>
                                <td class="text-left td-action"><span>{{ $user->admin ? 'Sim' : 'Não' }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                @endif
                
            </div>
        </div>

    </div> <!-- end card-->
</div><!-- end col -->

<script>
    // se tiver aberto, mostra setinha pra cima
</script>