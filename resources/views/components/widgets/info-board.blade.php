<div class="{{ isset($classCol) ? $classCol : 'col-md-12 col-xl-12' }}">

    <div class="col-12 card-box-without-shadow corner-box-border-{{ $number ?? '1'}}">

        <div class="rounded-circle avatar-widget bg-soft-{{ isset($color) ? $color : 'info' }} border-{{ isset($color) ? $color : 'info' }} border">
            <i class="{{ $icon }} font-22 avatar-title text-{{ isset($color) ? $color : 'info' }}"></i>
        </div>

        <div class="text-right">
            <h3 class="text-muted mt-1"><span
                    data-plugin="counterup">{{ $content }}</span></h3>
            <p class="text-muted mb-1 text-truncate">{{ $label }}</p>
        </div>

    </div>
    
</div>
