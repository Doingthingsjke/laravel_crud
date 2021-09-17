<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $authCheck)
    {
        if (auth()->user()->is_admin)
            return $next($request);

        return redirect('dashboard')->with('error', 'You don`t have admin access.');
    }
}
