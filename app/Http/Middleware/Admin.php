<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Admin
{
      public function handle(Request $request, Closure $next)
    {

        if(auth()->check() && auth()->user()->is_admin == 1){
            
            
            return $next($request);
            
        }else
                {
                
                // return response()->view('puplicUser.welcome'); // will not work
                return redirect()->route('home');
            }

    }
}
