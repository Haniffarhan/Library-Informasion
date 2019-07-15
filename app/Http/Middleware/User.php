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
    public function handle($request, Closure $next, $role='')
    {
        $userRole=$request->user();

        if($userRole && $userRole->count()>0)
        {
            $userRole=$userRole->role;
            $checkRole=0;
            if($userRole==$role && $role=='1')
            {
                $checkRole=1;
            }
            elseif($userRole==$role && $role=='2')
            {
                $checkRole=1;
            }
            elseif($userRole==$role && $role=='3')
            {
                $checkRole=1;
            }
            
            if($checkRole==1)
                return $next($request);
            else
               return abort(403);
        }
        else
        {
            return $next($request);
        }
    }
}
