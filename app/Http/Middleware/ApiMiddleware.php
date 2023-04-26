<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth('api')->check()) {
            return $next($request);
        }
        return response()->json([
            'data' => null,
            'success' => false,
            'message' => 'Unauthenticated'
        ])->setStatusCode(Response::HTTP_UNAUTHORIZED);
    }
}
