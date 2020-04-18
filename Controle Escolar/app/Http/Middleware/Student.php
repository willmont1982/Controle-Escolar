<?php


namespace App\Http\Middleware;

use Closure;
use Domain\Student\Student as ModelStudent;
use Illuminate\Support\Facades\Auth;

class Student
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

        if (!$owner instanceof ModelStudent) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
