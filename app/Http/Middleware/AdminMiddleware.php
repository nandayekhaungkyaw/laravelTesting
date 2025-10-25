<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        // Check if user is logged in AND is admin
        if (!auth()->check() || !auth()->user()->is_admin) {
            // Block access or redirect
            abort(403); // Forbidden page
            // OR redirect to home: return redirect('/');
        }

        // User is admin, let request continue
        return $next($request);
    }
}
