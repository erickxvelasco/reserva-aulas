<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {

        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            $total=Auth::guard($guard);
            //dd($total->check());
            if ($total->check()) {
                //dd(Auth::guard($guard));//cambiar aqui aqui ya se autentico
                //dd($total->user());

                return redirect(RouteServiceProvider::HOME);
            }else{
                //dd(Auth::guard($guard));
            }
        }
        $siguiente=$next($request);
        //dd($siguiente);
        return $siguiente;
    }
}
