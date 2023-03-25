<?php

namespace App\Http\Middleware;
use App\Exceptions\PageNotFoundException;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class UserMiddleware
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

        if (Route::is('system.user.index')) {
            $id = false;
        }


    
        if($id==true){
        return $next($request);
    }else
    {
        throw new PageNotFoundException();
    }
}
}
