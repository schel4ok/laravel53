<?php

namespace App\Http\Middleware;

use URL;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect( URL::route('admin.index') );
        }

        return $next($request);
    }
}
