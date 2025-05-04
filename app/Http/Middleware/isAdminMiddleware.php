<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades;


class isAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(\Illuminate\Support\Facades\Auth::check()){


            if(\Illuminate\Support\Facades\Auth::user()->is_adimn == 1)
            
            
            {
                return $next($request);
            }
            
            else{
                abort(403);
            }

        }else{

            return redirect()->back()->with('status','You should Log in');
        }
    }
}


