<?php

namespace Laravins\RemoteAuthClient;

use Closure;
use Illuminate\Http\Request;

class RemoteAuthManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $pass = $request->json('auth_pass');

        if (!isset($pass)) {
            return response()->json(['msg' => 'remote password needs to be set'], 403);
        }

        if ($pass != env('REMOTE_AUTH_PASS', '')) {
            return response()->json(['msg' => 'Invalid credentials'], 403);
        }
        return $next($request);
    }
}
