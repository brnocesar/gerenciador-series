@if ( !empty($flash_message) )
    @foreach ($flash_message as $message)
        <div class="flash-message flash-message-{{$message['status']}}">
            <strong>{{ ucfirst($message['status']) }}</strong> - {{ $message['content'] }}
        </div>
    @endforeach
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
