<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class employeeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //  return $next($request);
        //  if(Auth::check()&& Auth::employee()->is_banned)
        //  {
        //    $banned = Auth::employee()->is_banned == "1";
        //    Auth::logout();

        //    if($banned ==1){
        //        $message = "ur accaount has been banned";
        //    }
        //    return redirect()->route('managerecep') //login
        //    ->with('status',$message)
        //     ->withErrors(['email' => "ur accaount has been banned"]);
        //   }
        return $next($request);
    }
}
