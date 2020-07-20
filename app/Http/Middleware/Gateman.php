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
            if ( auth()->user()->hasRole('admin'))
            {
                // return redirect('/student'. RouteServiceProvider::HOME);
            }

            if ( auth()->user()->hasRole('super_admin') )
            {
                return redirect('/super_admin');
            }

            return redirect('student/polls');
        }
        else  
        {
            return redirect()->route('login');
        }
    }
}
 