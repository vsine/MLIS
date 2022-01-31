<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TaskMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        echo '666';
        return $next($request);
    }
}
