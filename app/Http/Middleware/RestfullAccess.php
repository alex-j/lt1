<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RestfullAccess
{
    /**
     * This class is just an example for Test project
     * It shows how to handle access for specific routes
     * See also routes/web.php for details
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null)
    {
        if(!is_null($role))
            echo "$role\n";
        
        if ($request->has('test')) {
            return $next($request);
        }
        
        if(!Auth::check()){
            exit('Access denied for anonymous user');
        }
        
        if(!Auth::user()->hasRole($role)){
            exit('This action');
        }
        
        //return redirect(RouteServiceProvider::HOME);

        return $next($request);
    }
}
