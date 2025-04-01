<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //\Log::info('Access Token received', ['token' => $request->header('access_takon')]);
        $token=$request->header('access_takon');
        if($token!=null)
        {
            $access_takon=User::where('access_takon','=',$token)->first();
            if($access_takon){
                $request->merge(['user_id' => $access_takon->id]);
                 return $next($request);
            }
            else
            {
                return response()->json([
                    'message'=>"Access token is not correct "
                ],401);
             }
    }
        else
        {
            return response()->json([
                'message'=>"Access token not found "
            ],400);
        }
       
    }
}
