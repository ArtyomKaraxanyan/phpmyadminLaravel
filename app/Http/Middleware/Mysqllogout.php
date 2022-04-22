<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Mysqllogout
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
    if (session()->has('user_name')){
       session()->forget('user_name');
      return redirect('/');
    }

        return $next($request);
    }
}
