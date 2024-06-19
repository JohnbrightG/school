<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



class HasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,...$permissions)
    {
		$route = Route::getRoutes()->match($request);
		$currentroute = $route->getName();
		
		
		//echo $currentroute;
		//echo Auth::user()->id;
		
		foreach($permissions as $permission){
			
			//echo $permission;
		}
		   
		//exit();
        return $next($request);
    }
}
