<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('loggedInUser') && ($request->path() != '/' && $request->path() != '/register')) {
            return redirect('/');
        }
        if (session()->has('loggedInUser') && ($request->path() == '/' || $request->path() == '/register')) {
            return back();
        }
        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');// these two header is used for after logout by clicking the browser back button it should not redirect to after login page , using these two header we can prevent it.
    }
    
}
