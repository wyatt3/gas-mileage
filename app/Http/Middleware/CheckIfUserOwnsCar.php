<?php

namespace App\Http\Middleware;
use App\Car;
use Auth;

use Closure;

class CheckIfUserOwnsCar
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
        $car_id = $request->route('car_id');
        if($car_id) {
            if(Car::find($car_id)->user_id == Auth::user()->id) {
                return $next($request);
            } else {
                return redirect(route('home'));
            }
        } else {
            return $next($request);
        }
    }
}
