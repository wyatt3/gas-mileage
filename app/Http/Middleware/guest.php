<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class guest
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
        if(Auth::user()->email == 'guest@mycars.com') {
            return redirect()->route('home')->with('message', 'You can\'t edit the guest account.');
        } else {
            return $next($request);
        }
    }
}