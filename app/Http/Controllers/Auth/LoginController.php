<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use lluminate\Support\MessageBag;
use App\Providers\RouteServiceProvider;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Tymon\JWTAuth\Exceptions\JWTException;
Use App\User;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
  
        
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function login(Request $request){ 
        
            $this->validate($request, [
                'email' => 'required|string',
                'password' => 'required|string',
            ]);
            $credentials = $request->only(['email', 'password']);

            if (! $token = Auth::attempt($credentials)) {
                return response()->json(['error' => "L'email ou bien le mot de passe et incorrect"], 401);
            }
            else{
                $user=User::where('email', $request->email)->first();  
                // Auth::login($user);
                // return response()->json('succès', 200);
                // return Auth::user();
                return $this->respondWithToken($token);
            }
            
           
    }

 /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(Auth::user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => Auth::factory()->getTTL() * 60,
            'user' => Auth::user()
        ]);
    }
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('api');
        // $this->middleware('guest')->except('logout');
        
    }
}
