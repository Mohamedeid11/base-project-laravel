<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Request;

class Authenticate extends Middleware
{

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request , string ...$guards): ?string
    {

        if (!$request->expectsJson()) {

            if (Request::is('admin')) {
                if(!auth('admin')->check()){
                    return route('admin.login');
                }
            }
            elseif( Request::is(app()->getLocale() . '/profile') || Request::is(app()->getLocale() . '/profile/*')){
                if(!auth('user')->check()){
                    return route('user.login') ;
                }else{
                    return '/';
                }
            }
            else{
                return '/admin';
            }

        }

        return null;
    }

}
