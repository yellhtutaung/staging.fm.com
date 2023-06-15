<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guard('admin')->check()){
            $UserStatus = auth()->guard('admin');
            $UserStatus = $UserStatus->user()->is_ban;
            if ($UserStatus == '1' || $UserStatus == 1)
            {
                auth()->guard('admin')->logout();
                return redirect('/admin/login');
                return redirect()->route('test');
            }else{
                return $next($request); // this is the request back ( the request which is comming this middle ) important
            }
        }else{
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
