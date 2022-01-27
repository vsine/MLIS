<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $username=Session::get('username');
        $last_token=DB::table('users')->where('username',$username)
            ->value('last_token');
        if (Session::token()==$last_token){

        }else{
         return redirect()->route('index.login',null,301);
        }
        return $next($request);
    }
}
