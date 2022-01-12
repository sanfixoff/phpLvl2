<?php

namespace App\Http\Middleware;

use \Auth;
use Closure;
use Illuminate\Http\Request;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user() && \Auth::user()->role_id == 1)
        {
            return $next($request);
        }
        else abort(404);
    }
    public function isAdmin()
    {
        if (\Auth::user() && \Auth::user()->role_id == 1)
        {
            return true;
        }
        else false;
    }
}
