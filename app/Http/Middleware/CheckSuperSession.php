<?php

namespace App\Http\Middleware;

use Closure;

class CheckSuperSession
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('superrole')) {
            // user value cannot be found in session
            return redirect('/');
        }

        return $next($request);
    }
}
