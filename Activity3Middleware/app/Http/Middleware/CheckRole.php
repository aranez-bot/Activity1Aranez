<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Get role from URL query (?role=admin)
        $role = $request->query('role');

        if ($role !== 'admin') {
            return response('Access Denied: Admins only', 403);
        }

        return $next($request);
    }
}