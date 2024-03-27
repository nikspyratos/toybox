<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Pennant\Feature;
use Symfony\Component\HttpFoundation\Response;

class ComingSoon
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Feature::active('coming-soon') && $request->route()->getName() !== 'coming-soon') {
            return redirect(route('coming-soon'));
        }

        if (Feature::inactive('coming-soon') && $request->route()->getName() === 'coming-soon') {
            return redirect(route('home'));
        }

        return $next($request);
    }
}
