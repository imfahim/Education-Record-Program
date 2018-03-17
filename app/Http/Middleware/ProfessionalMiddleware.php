<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class ProfessionalMiddleware
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
        // type check and let them in and logged in or not
        if(!Session::has('id')){
          return redirect()->route('professional.login');
        }
        if(Session::get('type') !== 'professional'){
          Session::flash('fail', 'Permission Denied !');
          return redirect()->back();
        }
        return $next($request);
    }
}
