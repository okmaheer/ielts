<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserAccess
{
    public function handle(Request $request, Closure $next)
    {
        // Must be authenticated
        if (!Auth::check()) {
            return redirect()->route('show.loginForm')
                ->with('error', 'Please log in to access this page.');
        }

        $user = Auth::user();

        // Only enforce for regular users (not admins)
        if (!$user->hasRole('User')) {
            return $next($request);
        }

        // Auto-expire: if duration has passed, mark inactive
        if ($user->hasAccessExpired()) {
            $user->status = '0';
            $user->save();
        }

        // Block inactive users
        if (!$user->isActive()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('show.loginForm')
                ->with('error', 'Your account access has expired or been deactivated. Please contact the administrator.');
        }

        return $next($request);
    }
}
