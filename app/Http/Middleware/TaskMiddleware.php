<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TaskMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $username=Session::get('username');
        $last_token=DB::table('users')->where('username',$username)
            ->value('last_token');
        if (Session::token()==$last_token){
            Session::put('task_check',true);
        }else{
            Session::put('task_check',false);
        }
        return $next($request);
    }
}
