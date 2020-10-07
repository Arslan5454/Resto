<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class CustomAuth
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
        $path=$request->path();
        if(($path=="login" || $path=="register") && Session::get('user'))
        {
            return redirect('/');
        }
        elseif(($path!="login" && !Session::get('user')) && ($path!="register" && !Session::get('user')))
        {
            return redirect('/login');
        
        };
        
        return $next($request);
    }
}
