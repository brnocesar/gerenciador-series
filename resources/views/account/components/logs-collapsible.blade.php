<div class="card-box-without-shadow">
    <h3 class="text-white">Tabela de logs 2</h3>
    <div id="accordion" class="mb-3">
        @php
            $cnt = 0;
        @endphp
        @foreach ( $logs as $log )
            <div class="card mb-1">
                <div class="card-header" id="headingOne">
                    <a class="row mr-1 text-light d-flex justify-content-center align-items-center" data-toggle="collapse"  href="#collapseOne_{{$log->id}}" aria-expanded="true">

                        <div class="col-1 badge bg-soft-warning text-white">
                            {{ $log->id }}
                        </div>
                        
                        <div class="col-6 text-white">
                            {{ $log->route }}
                        </div>
                        
                        <div class="col-2 bg-soft-info text-white">
                            @if ( isset($log->user_id) )
                                <strong>{{ $log->user->name }}</strong>
                            @else
                                Guest
                            @endif
                        </div>

                        <div class="col-3 text-muted">
                            {{ $log->created_at->format('d/m/Y H:i:s') }}
                        </div>
                    </a>
                </div>
                <div id="collapseOne_{{ $log->id }}" class="collapse {{ $cnt==0?'show':'' }}"
                    aria-labelledby="headingOne"
                    data-parent="#accordion">
                    <div class="card-body">
                        <p class="text-muted mb-2 font-13"><strong>Requisição:</strong> <span
                                class="ml-2"> Dados da requisição</span></p>
                    </div>
                </div>
            </div>
            @php
                $cnt += 1;
            @endphp
        @endforeach
    </div>    
</div>

<div id="pagination" class="pagination pagination-rounded justify-content-end mt-3 mb-4">
    {{$logs->links()}}
</div>
