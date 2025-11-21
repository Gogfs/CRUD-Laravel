<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // permitir acesso somente a usuários logados
        if ( $request->has('token')) {
            return response('Acesso negado. Você precisa de um token.', 403);
        }

        return $next($request);
    }
}
