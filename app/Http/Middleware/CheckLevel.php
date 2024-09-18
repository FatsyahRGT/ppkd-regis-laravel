<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $id_level): Response
    {
        $user = Auth::user();
        if (!$user) {
            return redirect('/login');
        }

        if ($user->id_level != $id_level) {
            
            return redirect('dashboard');
        }
        return $next($request);
    }
}
