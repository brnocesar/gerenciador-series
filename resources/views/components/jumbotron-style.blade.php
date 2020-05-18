{{-- separar em grupos similares --}}
@if ( $_SERVER['REQUEST_URI'] == '/entrar' ) form-auth @endif
@if ( $_SERVER['REQUEST_URI'] == '/registrar' ) form-register @endif
@if ( explode('/', $_SERVER['REQUEST_URI'])[1] == 'series' ) series @endif
@if ( explode('/', $_SERVER['REQUEST_URI'])[1] == 'series' AND ( isset(explode('/', $_SERVER['REQUEST_URI'])[3]) AND (explode('/', $_SERVER['REQUEST_URI']))[3] == 'temporadas') ) temporadas @endif
@if ( explode('/', $_SERVER['REQUEST_URI'])[1] == 'temporadas' AND ( isset(explode('/', $_SERVER['REQUEST_URI'])[3]) AND (explode('/', $_SERVER['REQUEST_URI']))[3] == 'episodios') ) episodios @endif