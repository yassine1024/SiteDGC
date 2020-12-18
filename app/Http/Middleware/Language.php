<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Session;
class Language
{


    public function __construct(Application $app, Request $request) {
        $this->app = $app;
        $this->request = $request;
    }

    /**
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $this->app->setLocale(session('my_locale', config('app.locale')));
//        dd( \Illuminate\Support\Facades\Session::get('my_locale'));

        // dd(session('my_locale', config('app.locale')));



       Session::get('my_locale');
        return $next($request);
    }
}
