<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectToRoleHome
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->hasRole('nurse')) {
                return redirect('/nurse');
            } elseif ($user->hasRole('doctor')) {
                return redirect('/doctor');
            } else {
                return redirect('/receptionist');
            }
        }
        return $next($request);
    }
}