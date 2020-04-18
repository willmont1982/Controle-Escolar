<?php


namespace App\Http\Middleware;

use Closure;
use Domain\Teacher\Teacher as ModelTeacher;
use Illuminate\Support\Facades\Auth;

class Teacher
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

        if (!$owner instanceof ModelTeacher) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
