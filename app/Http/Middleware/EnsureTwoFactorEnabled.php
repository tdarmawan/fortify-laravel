<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTwoFactorEnabled
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user && $user->two_factor_secret) {
            if (!$request->session()->get('auth.2fa_passed')) {
                return redirect()->route('two-factor.login');
            }
        }

        return $next($request);
    }
}
