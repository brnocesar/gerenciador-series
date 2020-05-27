<?php

namespace App\Http\Middleware;

use App\Helpers\FlashMessages;
use Closure;

class Administrador
{
    use FlashMessages;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( !auth()->user()->admin ) {

            $this->flashMessage([trans('messages.admin.you_are_not')]);
            
            return redirect()->route('minha_conta');
        }

        return $next($request);
    }
}
