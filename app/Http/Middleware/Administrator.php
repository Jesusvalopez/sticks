<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(\Illuminate\Support\Facades\Auth::user() && !\Illuminate\Support\Facades\Auth::user()->hasRole('Administrador')){
           return redirect('/');
        }

        return $next($request);
    }
}
