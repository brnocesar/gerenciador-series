<a href="{{ $href ?? '#' }}" class="btn btn-sm {{ $kind ?? 'btn-dark' }} {{ $margin ?? 'mb-2 mr-2' }} {{ $color ?? '' }}">
    @if ( isset($icon) )
        <i class="{{ $icon }} mr-2"></i>
    @endif
    {{ $label }}
</a>