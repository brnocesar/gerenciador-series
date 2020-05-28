<button type="{{ $type ?? 'submit' }}" class="btn btn-sm {{ $kind ?? 'btn-primary' }} {{ $margin ?? '' }} {{ $color ?? '' }}">
    @if ( isset($icon) )
        <i class="{{ $icon }} mr-2"></i>
    @endif
    {{ $label }}
</button>