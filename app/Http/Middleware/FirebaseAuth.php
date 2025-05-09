<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class FirebaseAuth
{
    public function handle(Request $request, Closure $next)
    {//fCTX8EzKQruws-eVydie4W:APA91bEsZ9AR_2gcmecZkMVLFUVBVJ4A6E_tunT8zXowOXoM3LG40KuFVo0oEoMyFxgK6N1iWbMfm9j1310Wzasd47ls5Hqirm8eW6VZ3PKrZ8Jee9rAZWM
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
