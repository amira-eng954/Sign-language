<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class FirebaseAuth
{
    public function handle(Request $request, Closure $next)
    {
        $idToken = $request->bearerToken(); // جاي من Authorization: Bearer <token>

        if (!$idToken) {
            return response()->json(['message' => 'No token provided'], 401);
        }

        try {
            $verifiedIdToken = Firebase::auth()->verifyIdToken($idToken);
            $uid = $verifiedIdToken->claims()->get('sub');

            $request->merge(['firebase_uid' => $uid]);

            return $next($request);
        } catch (\Throwable $e) {
            return response()->json(['message' => 'Invalid token', 'error' => $e->getMessage()], 401);
        }
    }
}
