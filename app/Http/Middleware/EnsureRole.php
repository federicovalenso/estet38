<?php

namespace App\Http\Middleware;

use Closure;
use App\Role;

class EnsureRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $role
     * @return mixed
     */
    public function handle($request, Closure $next, string $role)
    {
        if ($request->user()->hasRole($role) != true) {
            return redirect('login');
        }
        return $next($request);
    }
}
