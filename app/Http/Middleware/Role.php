<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check()) {
            $roles = explode('-', $role);
            foreach ($perans as $group) {
                if (Auth::user()->role == $roles) {
                    return $next($request);
                }
            }
        }
        return redirect()->route('auth.logout');
    }
}
