<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role_id == 1) {
            return $next($request);
        }
    
            Auth::guard('web')->logout();
            $request->session()->invalidate();  
            $request->session()->regenerateToken();
        return redirect()->route('login')->with('error', 'Only Admin users are allowed to access this page');
        
    }
}
