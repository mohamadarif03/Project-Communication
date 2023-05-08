<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProductMidlleware
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
        if(in_array('Product Manager',Auth()->user()->userrole->pluck('name')->toarray()) || in_array('Service Manager',Auth()->user()->userrole->pluck('name')->toarray())){
            return $next($request);
        }
        return redirect()->back();
    }
}
