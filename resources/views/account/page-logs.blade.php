@extends('components.layout')

@section('cabecalho')
    Logs de atividades
@endsection

@section('conteudo')

    <div class="d-flex justify-content-end">
        @include('components.link-button', ['color' => 'back-btn', 'icon' => 'fas fa-plus', 'label' => 'Ver todos', 'href' => route('listar_logs_todos')])
        @include('components.link-button', ['color' => 'back-btn', 'icon' => 'fas fa-arrow-left', 'label' => 'Voltar', 'href' => route('account.page.index')])
    </div>

    <div class="col-12">
        <div class="card table-card">
            <table class="table dt-responsive nowrap bstable" id="datatable">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-left">Route</th>
                        <th class="text-left">User</th>
                        <th class="text-center">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logs as $log)
                        <tr>
                            <td class="text-center"> {{$log->id}} </td>
                            <td class="text-left">{{ $log->route }}</td>
                            <td class="text-left">
                                @if ( isset($log->user_id) )
                                    <strong>{{$log->user->name}}</strong>
                                @else
                                    Guest
                                @endif
                            </td>
                            <td class="text-center">{{ $log->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div id="pagination" class="pagination pagination-rounded justify-content-end mt-3 mb-4">
            {{$logs->links( "pagination::bootstrap-4") }}
        </div>
    </div>

<script>
    
</script>

@endsection