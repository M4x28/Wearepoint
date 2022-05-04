<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckStepTwo
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
            /*
            if (is_null(auth()->user()->CAP) && is_null(auth()->user()->address) && is_null(auth()->user()->city))
                return redirect()->route('step-one.create');
            else return $next($request);
            */
            return $next($request);
        } else return redirect()->route('index');
    }
}
