@if ($errors->any())
    <div class="mb-3">
        @foreach ($errors->all() as $error)
            <div class="flash-message flash-message-danger">
                <strong>Erro: </strong> {{ $error }}
            </div>
        @endforeach
    </div>
@endif
