<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Admin
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
        switch (Auth::user()->id_role) {
            case 1:
                return $next($request);
                break;
            case 2:
                return abort(403);
                break;
            case 3:
                return abort(403);
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
    }
}
