<?php

namespace App\Http\Middleware;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Closure;

use Session;
use App\User;
use App\Role;

class Admin extends Controller
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
        
        
        // if(Auth::user()->$roles->id==1){
            
            return $next($request);
        // }
        // return redirect ('/home');
        // if(($user->Roles->id==1) && Session::get('user')){



        //     return redirect('/');

        // }
        // else
        // {
        //     return redirect('/login');
        // }
        // echo 'Hi From MiddleWare';
        
    }
}
