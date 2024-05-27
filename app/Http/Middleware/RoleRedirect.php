<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleRedirect
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            switch ($user->role) {
                case 'admin':
                    return redirect('/admin');
                case 'director':
                    return redirect('/director');
                case 'professor':
                    return redirect('/professor');
                case 'student':
                    return redirect('/student');
            }
        }

        return $next($request);
    }
}
