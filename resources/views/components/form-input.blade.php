<div class="form-group {{ isset($col) ? $col : '' }}" 
    @if ( isset($hidden) and $hidden == 'true' )
        hidden
    @endif
>
    <label class="{{ $color ?? 'default-input' }} ml-1" for="{{ $name }}">{{ $label }}</label>

    <div class="input-group">
        <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}" 

            @if ( isset($required) and $required == 'true' )
                required
            @endif

            @if ( isset($readonly) and $readonly == 'true' )
                readonly
            @endif

            @if ( isset($placeholder) )
                placeholder="{{ $placeholder }}"
            @endif

            @if ( isset($value) )
                value="{{ $value }}"
            @endif

            @if ( isset($field) )
                @if ( isset($data->$field) )
                    value="{{ old($name) ? old($name) : $data->$field }}"
                @else
                    value=""
                @endif
            @endif
            
            class="form-control {{ $color ?? 'default-input' }} {{-- @error($name) is-invalid @enderror --}}"

            @if  ( $type == 'password' )
                {{-- autocomplete="off" --}}
                autocomplete="new-password"
            @endif

            @if  ( $type == 'number' )
                @if ( isset($min) )
                    min={{ $min }} 
                @endif
                @if ( isset($max) )
                    max={{ $max }} 
                @endif
            @endif
        >

        @error($name)
            <label class="text-danger ml-1" for="{{ $name }}">{{ $message }}</label>
        @enderror

        {{-- @if ( isset($errors->all()[$name]) )
            <label class="text-danger ml-1" for="{{ $name }}">{{ $errors->all()[$name] }}</label>
        @endif --}}
    </div>
</div>