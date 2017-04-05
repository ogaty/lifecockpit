<?php

namespace App\Http\Middleware;

use Closure;

class SimpleApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (md5($request->header('token')) != env('API_KEY_MD5')) {
            return response('Not valid token provider.', 401);
        }
        return $next($request);
    }
}
