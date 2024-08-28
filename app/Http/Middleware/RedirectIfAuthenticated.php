<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Check if the user is already authenticated
         if(Auth::check()){

             // Redirect to home page or any other route
           //  return redirect()->route('users.profile', ['id' =>auth()->user()->id]);

               }

            // If not authenticated, proceed with the request
        return $next($request);
    }
}
