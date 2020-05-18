<?php

namespace App\Http\Middleware;

use App\Model\Log;
use Closure;
use Illuminate\Support\Facades\Auth;

class LogAtividades
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Log::create([
            'route'     => $_SERVER['REQUEST_URI'], 
            'request'   => $request->except('_token', 'password', 'confirm_password'), 
            'user_id'   => Auth::check() ? Auth::user()->id : null
        ]);
        
        return $next($request);
    }
}
