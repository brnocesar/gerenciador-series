@if ( !empty($flashMessage) )
    <div class="mb-3">
        @foreach ($flashMessage as $message)
            @if ( is_array($message) )
                <div class="flash-message flash-message-{{$message['status']}}">
                    <strong>{{ ucfirst($message['status']) }}</strong> - {{ $message['content'] }}
                </div>
            @endif
        @endforeach
    </div>
@endif
