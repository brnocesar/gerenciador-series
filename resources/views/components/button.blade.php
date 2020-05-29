<button type="{{ $type ?? 'submit' }}" class="btn btn-sm {{ $style ?? 'btn-primary' }} {{ $margin ?? '' }} {{ $color ?? 'default-button' }}">
    @if ( isset($icon) )
        <i class="{{ $icon }} mr-2"></i>
    @endif
    {{ $label }}
</button>