<div class="{{ isset($classCol) ? $classCol : 'col-md-12 col-xl-12' }}">

    <div class="card-box">

        <div class="row">

            <div class="col-6">
                <button class="avatar-lg bg-soft-{{ isset($color) ? $color : 'info' }} border-{{ isset($color) ? $color : 'info' }} border">
                    <i class="{{ $icon }} font-22 avatar-title text-{{ isset($color) ? $color : 'info' }}"></i>
                </button>
            </div>

            <div class="col-6">
                <div class="text-right">
                    <h3 class="mt-1"><span
                            data-plugin="counterup">{{ $content }}</span></h3>
                    <p class="text-muted mb-1 text-truncate">{{ trans($label) }}</p>
                </div>
            </div>
            
        </div>

    </div>
    
</div>
