<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, $guard = null)
     {
         if (Auth::user()->usertip=="Admin") {
             if ($request->ajax() || $request->wantsJson()) {
                 return response('Unauthorized.', 401);
             } else {
                 return redirect()->guest('login');
             }
         }

         return $next($request);
     }
}
