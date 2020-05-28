<div class="col-12">
    <div class="card">
        <div class="card-header bg-{{ $bg ?? 'secondary'}}  text-bg-warning d-flex justify-content-between align-items-center">

            <h5 class="text-warning">{{$title}}</h5>
            <span>
                <a href="{{ $href ?? '#' }}" role="button" aria-expanded="false"
                    aria-controls="collapse{{ $cardID ?? '' }}" class="btn text-warning"
                >
                Ver todas
                </a>
                <a data-toggle="collapse" href="#collapse{{ $cardID ?? '' }}" role="button" aria-expanded="false"
                    aria-controls="collapse{{ $cardID ?? '' }}" class="text-warning">
                    <i class="mdi mdi-window-minimize"></i>
                </a>
            </span>
        </div>

        <div id="collapse{{ $cardID ?? '' }}" class="collapse {{ ($show ?? 'false') == 'true' ? 'show' : '' }}">
            <div class="card">

                @if ( isset($contents) )
                    <table class="table-card">
                        <thead>
                            <tr>
                                <th class="text-center td-date">Data</th>
                                <th class="text-left td-action">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contents as $key => $value)
                                <tr class="log-row">
                                    <td class="text-center font-13 card-p td-date">{{ $key }}</td>
                                    <td class="text-left td-action"><span>{{ $value }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                
            </div>
        </div>

    </div> <!-- end card-->
</div><!-- end col -->

<script>
    
</script>