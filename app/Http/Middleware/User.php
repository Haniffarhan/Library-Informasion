<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class User
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
        if (Auth::check() && Auth::user()->role == 1) {
            return redirect()->route('admin.profile');
        }
        elseif (Auth::check() && Auth::user()->role == 2) {
            return redirect()->route('headstaff.profile');
        }
        elseif (Auth::check() && Auth::user()->role == 3) {
            return $next($request);
        }
        else {
            return redirect()->route('/');
        }
    }
}
