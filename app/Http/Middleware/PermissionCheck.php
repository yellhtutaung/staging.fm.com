<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    //  js array to json php structure online ( https://wtools.io/convert-js-object-to-php-array )

    public function checkPermission()
    {
        $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); // get all url
        if ($uriSegments[1] == 'admin' && count($uriSegments) <= 2 )
        {
            return 'admin';
        }
        $checkUrlIndex = count($uriSegments) >= 3 ? $uriSegments[2]:null;  // mainRoute
//        return $checkUrlIndex;
        $userRole = Auth::guard('admin')->user()->role;
        $fetchPermission = Permission::find($userRole);
        $permissionJson = json_decode($fetchPermission->guard_json,true);
        foreach ($permissionJson as $Index => $permission)
        {
            $mainRoute = array_keys($permission); // main route only
            if ($checkUrlIndex == $mainRoute[0])
            {
                return true;
            }
        }

    }

    public function handle(Request $request, Closure $next)
    {
//        dd($this->checkPermission());
        $checkPermission = $this->checkPermission();
        if (is_null($checkPermission) )
        {
            return  redirect()->route('home')->with('error','You are not allowed to go there .');
        }else{
            return $next($request);
        }
    }
}
