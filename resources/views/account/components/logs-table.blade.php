<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div>
                <h3 class="text-white">Tabela de logs</h3>
            </div>
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
    </div>

    <div id="pagination" class="pagination pagination-rounded justify-content-end mt-3 mb-4">
        {{$logs->links( "pagination::bootstrap-4") }}
    </div>
</div>