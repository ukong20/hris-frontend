<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class ApiAuth
{
    // public function handle($request, Closure $next)
    // {
    //     if (!session()->has('api_token')) {
    //         return redirect()->route('login')->with('error', 'Please login first');
    //     }

    //     return $next($request);
    // }
   public function handle(Request $request, Closure $next): Response
    {
        $token = session('api_token');

        if (!$token) {
            return redirect()->route('login')
                ->with('error', 'Please login first.');
        }

        // Attach token to all outgoing API requests
        Http::macro('withApiToken', function () use ($token) {
            return Http::withToken($token)->acceptJson();
        });

        return $next($request);
    }
}
