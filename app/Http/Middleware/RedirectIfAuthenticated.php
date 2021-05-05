<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        $newRoute = null;
        if (isset($_GET['newRoute'])) {
          $newRoute = 'reunion';
        }
        if (Auth::guard($guard)->check()) {
          if ($_GET['newRoute'] == 'reunion') {
            return redirect(RouteServiceProvider::REUNION);
          } else {
            return redirect(RouteServiceProvider::HOME);
          }
        }

        return $next($request);
    }
}
