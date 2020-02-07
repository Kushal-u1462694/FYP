<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class CheckAdmin
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
        $userRoles = FacadesAuth::user()->roles->pluck('name');
        if (!$userRoles->contains('admin')) {
            return redirect('/permissionDenied');
        }
        return $next($request);
    }
}
