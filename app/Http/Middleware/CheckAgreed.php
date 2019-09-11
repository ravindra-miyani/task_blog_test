<?php

namespace App\Http\Middleware;

use Closure;
use Agreed;//Custom Facade
Use Redirect;
class CheckAgreed{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Agreed::checkAgree()){
            return $next($request);
        }else{
            return Redirect::back()->withErrors(['You are not allowed to access the data.']);
        }
        
    }
    
}
