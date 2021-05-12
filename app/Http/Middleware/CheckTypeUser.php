<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckTypeUser
{

    public function handle(Request $request, Closure $next, $rol)
    {
        if($rol === auth()->user()->tipo){
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
