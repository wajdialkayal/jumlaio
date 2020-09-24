<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TwoFactorAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->two_factor_auth && $user->two_factor_code) {
                if ($user->two_factor_expires_at->lt(now())) {
                    
                    $user->resetTwoFactorCode();
                    Auth::logout();

                    return redirect()->route('login')->with('error', 'The two factor code has expired. Please login again.');
                }

                if (!$request->is('two-factor-authentication*')) {
                    return redirect()->route('verification.two_factor.index');
                }
            }
        }
        return $next($request);
    }
}
