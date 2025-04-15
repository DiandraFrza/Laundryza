<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Cek apakah role user ada di list yang diizinkan
        if (!in_array($request->user()->role, $roles)) {
            abort(403, 'Akses ditolak! Role tidak sesuai.');
        }
        
        return $next($request);
    }
}