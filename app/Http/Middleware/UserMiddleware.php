<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
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

        if (Auth::check() && Auth::user()->status == 0) {

            Auth::logout();
            return redirect()->route('index')
                ->with(['message' => 'Your account has been Banned. Please contact administrator.']);
        }
        return $next($request);
    }
}
