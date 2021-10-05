<?php

namespace App\Http\Middleware;

use Closure;
// use Session;
// use App\User;
// use App\Role;

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
        // if(($user->Roles->id==1) && Session::get('user')){



        //     return redirect('/');

        // }
        // else
        // {
        //     return redirect('/login');
        // }
        // echo 'Hi From MiddleWare';
        return $next($request);
    }
}
