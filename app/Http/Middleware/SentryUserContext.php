<?php

namespace App\Http\Middleware;

use Closure;
use Sentry\State\Scope;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use function Sentry\configureScope;

class SentryUserContext
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (invite()) {
            configureScope(static function (Scope $scope) use ($request): void {
                $scope->setUser([
                    'id'         => invite()->id,
                    'username'   => invite()->comment,
                    'ip_address' => $request->ip(),
                ]);
            });
        }

        return $next($request);
    }
}
