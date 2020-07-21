<?php

namespace App\Http\Middleware;

use Closure;

class Gateman
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
        if (! auth()->check() )
        {
            return redirect('/login');
        }

        if ( auth()->user()->hasRole('admin') )
        {
            return redirect('/admin');
        }

        return $next($request);
    }
}
 