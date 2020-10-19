<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class x extends Middleware
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @param null $guard
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, \Closure $next, $guard = null)
    {
        dd($request->all(), $guard);
        throw new \Exception('x middleware here');

        return $next($request);
    }
}
