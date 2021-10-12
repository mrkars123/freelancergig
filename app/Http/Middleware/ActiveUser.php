<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
class ActiveUser
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() && (auth()->user()->status == 0)){
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->route('login')->with('error', 'Your Account is suspended, please contact Admin.');

            //return response()->json([ [4] ]);

        }

        return $next($request);
    }
}
