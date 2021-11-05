<?php

namespace App\Http\Middleware;

use Closure;
use User;
use Role;

class RoleMiddleware
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
        $login_user=Auth::user();

        if($login_user->role_id==5)
        {
            return $next($request);
        }
        else
    
        return $next($request);
    }
}
