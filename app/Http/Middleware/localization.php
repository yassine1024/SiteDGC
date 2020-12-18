<?php

namespace App\Http\Middleware;

use Closure;

class Localization
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
        dd(\App::getLocale());
        if ( \Session::has('lang')) {
            // Récupération de la 'lang' dans Session et activation
//            dd(\Session::get('lang'));
            \App::setLocale(\Session::get('lang'));
        }
dd("slimane");
        return $next($request);
    }
}
