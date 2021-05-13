<?php

namespace App\Http\Middleware\auth;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkExpire
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        $expireORnot = Auth::user()->id;
        $expireORnot = 0;
        if ($expireORnot == 1) return redirect()->route('expire.ORNOT');
        return $next($request);
    }
}
