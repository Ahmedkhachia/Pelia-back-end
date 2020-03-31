<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckTypeM
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
        if (Auth::user()->id_type != "medecin") {
            return redirect("dashboard");
        }
        return $next($request);
    }
}
