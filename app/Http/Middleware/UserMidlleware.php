<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMidlleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(in_array('1',explode(',',Auth()->user()->role))){
            return redirect('dashboard');
        }else{
            return $next($request);
        }
        
    }
}
