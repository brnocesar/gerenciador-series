<div class="col-12">
    <div class="card">
        <div class="card-header bg-{{ $bg ?? 'secondary'}}  text-bg-success d-flex justify-content-between align-items-center">

            <h5 class="text-success">Configurações</h5>
            <span>
                <a href="{{ $href ?? '#' }}" role="button" aria-expanded="false"
                    aria-controls="collapse{{ $cardID ?? '' }}" class="btn text-success"
                >
                    <i class="fas fa-cog"></i>
                </a>
                <a data-toggle="collapse" href="#collapse{{ $cardID ?? '' }}" role="button" aria-expanded="false"
                    aria-controls="collapse{{ $cardID ?? '' }}" class="text-success"
                >
                    <i class="mdi mdi-window-minimize"></i>
                </a>
            </span>
        </div>

        <div id="collapse{{ $cardID ?? '' }}" class="collapse {{ ($show ?? 'false') == 'true' ? 'show' : '' }}">
            <div class="card">

                <table class="table-card">
                    <tbody>
                        <tr>
                            <td class="text-center font-13 card-p td-date">Idioma</td>
                            <td class="text-left td-action">PT-BR</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>

    </div> <!-- end card-->
</div><!-- end col -->