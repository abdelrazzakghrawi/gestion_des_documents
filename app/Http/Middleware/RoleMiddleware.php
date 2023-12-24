<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // app/Http/Middleware/RoleMiddleware.php

public function handle($request, Closure $next, ...$roles)
{
    $userRole = Auth::user()->role;

    if (!in_array($userRole, $roles)) {
        return abort(403, 'Unauthorized action.');
    }

    return $next($request);
}

}
