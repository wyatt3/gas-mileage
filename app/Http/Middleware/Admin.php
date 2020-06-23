<?php
/*  
*   This middleware was written by me, to allow only users with the isAdmin trait to access whatever pages you like,
*   redirecting all other users to the home page. This allows for the creation of both 'base' users and 'admin' users.
*   All you need to do to implement this middleware is place it after the prefix in a Route:group in the web.php file.
*/

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
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
        if(Auth::user()) {
            $user = Auth::user();
            if($user->isAdmin == true) {
                // go to page
                return $next($request);
            }
        }
        //send to home page if they arent a user or arent an admin
        return redirect(route('home'));
    }
}
