<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthEducadora
{
  
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->rol){
            case('0'):
                return redirect('home');
                 break;
             case('1'):
                return $next($request);
                 break;
        };
    }
}
