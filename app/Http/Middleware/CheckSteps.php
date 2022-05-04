<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSteps
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
        if (auth()->user()) {

            if (auth()->user()->CF && auth()->user()->birthday && auth()->user()->phone)
                return redirect()->route('check_role');
                
            if (auth()->user()->CAP && auth()->user()->address && auth()->user()->city)
                return redirect()->route('step-two.create');
                
            else return $next($request);
        } else return redirect()->route('index');
    }
}
