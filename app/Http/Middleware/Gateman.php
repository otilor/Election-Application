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
        if ( auth()->check() )
        {
            if ( auth()->user()->hasRole('student') )
            {
                return redirect('/student');
            }

            if ( auth()->user()->hasRole('admin'))
            {
                return redirect('/student');
            }

            if ( auth()->user()->hasRole('super_admin') )
            {
                return redirect('/super_admin');
            }
            
            return redirect('/polls');
        }
        else  
        {
            return redirect()->route('login');
        }
    }
}
 