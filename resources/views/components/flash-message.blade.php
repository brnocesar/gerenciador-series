@if ( !empty($flash_message) )
    <div class="mb-3">
        @foreach ($flash_message as $message)
            <div class="flash-message flash-message-{{$message['status']}}">
                <strong>{{ ucfirst($message['status']) }}</strong> - {{ $message['content'] }}
            </div>
        @endforeach
    </div>
@endif

@if ($errors->any())
    <div class="mb-3">
        @foreach ($errors->all() as $error)
            <div class="flash-message flash-message-danger">
                <strong>Erro: </strong> {{ $error }}
            </div>
        @endforeach
    </div>
@endif
