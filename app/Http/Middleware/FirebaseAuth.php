<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Symfony\Component\HttpFoundation\Response;

class FirebaseAuth
{
    public function handle(Request $request, Closure $next)
    {
        $idToken = $request->bearerToken(); // جاي من Authorization: Bearer <token>

        if (!$idToken) {
            return response()->json(['message' => 'No token provided'], Response::HTTP_UNAUTHORIZED);
        }

        try {
            $auth = Firebase::auth();
            $verifiedIdToken = $auth->verifyIdToken($idToken);
            $uid = $verifiedIdToken->claims()->get('sub');

            // Optional: تحميل بيانات المستخدم من Firebase
            $firebaseUser = $auth->getUser($uid);

            $request->merge([
                'firebase_uid' => $uid,
               // 'firebase_user' => $firebaseUser,
            ]);

            return $next($request);

        } catch (\Throwable $e) {
            return response()->json([
                'message' => 'Invalid or expired token',
                'error' => $e->getMessage(),
            ], Response::HTTP_UNAUTHORIZED);
        }
    }
}
