<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class HeadStaff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id_role='')
    {
        $userRole=$request->user();

        if($userRole && $userRole->count()>0)
        {
            $userRole=$userRole->id_role;
            $checkRole=0;
            if($userRole==$id_role && $id_role=='1')
            {
                $checkRole=1;
            }
            elseif($userRole==$id_role && $id_role=='2')
            {
                $checkRole=1;
            }
            elseif($userRole==$id_role && $id_role=='3')
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
