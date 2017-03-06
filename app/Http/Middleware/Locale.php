<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class Locale
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
        $locale = Config::get('app.locale');
        
        if (Session::has('locale')) {
            $locale = Session::get('locale');
        }
        
        \App::setLocale($locale);
        
        return $next($request);
    }
}
