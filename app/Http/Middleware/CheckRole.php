<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        $rolesArray = explode('|', $roles);
        if (Auth::check() && in_array(Auth::user()->roles->first()->name, $rolesArray)) {
            return $next($request);
        }

        return redirect('/')->with('error', '이 페이지에 액세스할 수 있는 권한이 없습니다.');
    }
}
