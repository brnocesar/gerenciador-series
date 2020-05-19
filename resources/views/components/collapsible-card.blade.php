<div class="col-12">
    <div class="card">
        <div class="card-header bg-{{ $bg ?? 'info'}}  text-bg-{{ $text ?? 'white'}} d-flex justify-content-between align-items-center">

            <h5 class="text-{{ $text ?? 'white'}}">{{$title}}</h5>
            <span>
                <a href="{{ $href ?? '#' }}" role="button" aria-expanded="false"
                    aria-controls="cardCollpase{{ $cardID ?? '' }}" class="btn text-{{ $text ?? 'white'}}"
                >
                <i class="mdi mdi-pencil"></i> {{ $button ?? 'Editar' }}
                </a>
                <a data-toggle="collapse" href="#cardCollpase{{ $cardID ?? '' }}" role="button" aria-expanded="false"
                    aria-controls="cardCollpase{{ $cardID ?? '' }}" class="text-{{ $text ?? 'white'}}">
                    <i class="mdi mdi-window-minimize"></i>
                </a>
            </span>
        </div>

        <div id="cardCollpase{{ $cardID ?? '' }}" class="collapse {{ ($show ?? 'false') == 'true' ? 'show' : '' }}">
            <div class="card-body">

                @if ( isset($contents) )
                    @foreach ($contents as $content)
                        @if ( is_array($content) AND count($content) == 2 )
                            <div class="card-span">
                                <span class="text-muted font-13 card-p"><strong>{{ $content[0] }}</strong></span>
                                <span>{{ $content[1] }}</span>
                            </div>
                        @endif
                    @endforeach
                @endif
                
            </div>
        </div>

    </div> <!-- end card-->
</div><!-- end col -->