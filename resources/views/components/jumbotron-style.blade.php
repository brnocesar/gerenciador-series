@php
    $uri = explode('/', $_SERVER['REQUEST_URI']);
@endphp
{{-- @dd($uri, count($uri)) --}}
{{-- separar em grupos similares --}}
@if ( $_SERVER['REQUEST_URI'] == '/entrar' ) form-auth @endif
@if ( $_SERVER['REQUEST_URI'] == '/registrar' ) form-register @endif
@if ( $uri[1] == 'series' ) series @endif
@if ( $uri[1] == 'series' AND ( isset($uri[3]) AND ($uri)[3] == 'temporadas') ) temporadas @endif
@if ( $uri[1] == 'temporadas' AND ( isset($uri[3]) AND ($uri)[3] == 'episodios') ) episodios @endif