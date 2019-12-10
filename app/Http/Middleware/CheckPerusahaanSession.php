<?php

namespace App\Http\Middleware;

use Closure;

class CheckPerusahaanSession
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('login-pr')) {
            // user value cannot be found in session
            return redirect('/');
        }

        return $next($request);
    }
}
