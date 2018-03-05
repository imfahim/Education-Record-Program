<?php

namespace App\Http\Middleware;

use Closure;

class CentreMiddleware
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
        // type check centre ki na

        return $next($request);
    }
}
