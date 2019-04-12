<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkStatus
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
		    if(auth()->user()->user_status == 2){
          Auth::logout();
          return back();
        }
        return $next($request);
    }
}
