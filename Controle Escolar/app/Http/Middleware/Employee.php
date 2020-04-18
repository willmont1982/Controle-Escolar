<?php


namespace App\Http\Middleware;

use Closure;
use Domain\Employee\Employee as ModelEmployee;
use Illuminate\Support\Facades\Auth;

class Employee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $owner = Auth::user()->owner;

        if (!$owner instanceof ModelEmployee) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
