<?php

namespace App\Http\Middleware;

use App\Traits\ApiHelperTrait;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckActiveApiUser
{
    use ApiHelperTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( auth('user-api')->check()){
            return $next($request);
        }
        return $this->returnWrong(__('api.unable_to_enter_website'), JsonResponse::HTTP_UNAUTHORIZED);
    }

}
