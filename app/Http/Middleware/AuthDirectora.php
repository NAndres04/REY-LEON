<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthDirectora
{

    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->rol){
            case('0'):
                return $next($request);
                 break;
             case('1'):
                return redirect('inicio');
                 break;
        }
    }
}
