<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminPanelMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::get('is_admin')) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
