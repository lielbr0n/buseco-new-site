<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserRoleAndIsActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if(Auth::user()->status === 1 && Auth::user()->role === 'admin'){        
                return $next($request);
            }

            if(Auth::user()->status === 1 && Auth::user()->role === 'editor'){
                /** Check if the page route url is post or profile then accessing is allowed, if not it redirects to 404  */
                if($request->routeIs('post.*') || $request->routeIs('profile.*')){
                    return $next($request);
                }else{
                    return redirect(404);
                }
            }
        }
        
        return redirect('dashboard');
    }
}
