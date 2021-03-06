<?php

namespace App\Http\Middleware;

use Closure;
use Session;

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
        // type check centre ki na and also logged in or not
        if(!Session::has('logged_in')){
          return redirect()->route('centre.login');
        }
        
        if(Session::get('type') !== 'centre'){
          Session::flash('fail', 'Permission Denied !');
          return redirect()->back();
        }

        return $next($request);
    }
}
