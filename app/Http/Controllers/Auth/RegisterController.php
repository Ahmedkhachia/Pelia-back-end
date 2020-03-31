<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use lluminate\Support\MessageBag;
use App\Providers\RouteServiceProvider;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
Use App\User;
use Illuminate\Support\Facades\Validator;
use App\VilleUsers;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
  
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

// Methode de register avant la periode d'essai
    public function register(Request  $request){
      return true;
    }

    // Methode de register avant la periode d'essai
    public function create(Request  $request){
        $dataForm = $request->all();
        $errors = [];
        $rules =[
        'nom'=>'required|min:3|max:100',
        'prenom'=>'required|min:3|max:100',
        'phone' => ['required', 'string'],
        ];
    
        $valida = validator($dataForm, $rules);
        if(count($valida->errors()->all()) == 0)
        {
            $user =  new User; 
            $user->prenom = $request->prenom;
            $user->nom = $request->nom;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->ville = $request->ville;
            $user->password = Hash::make($request->password);
            $user->save();     

            $credentials = $request->only(['email', 'password']);

            if (! $token = Auth::attempt($credentials)) {
                return response()->json(['error' => "L'email ou bien le mot de passe et incorrect"], 401);
            }
            else{
                $user=User::where('email', $request->email)->first();  
                // Auth::login($user);
                // return response()->json('succès', 200);
                // return Auth::user();
                // $data = []; // Empty array
        
                // Mail::send('index', $data, function($msgg)
                // {
                //     $msgg->to('ahmedkhachia17@gmail.com', 'Pelia')->subject('Activation de votre compte Pelia');
                // });  
        
                return $this->respondWithToken($token);
            }
        }
        else
        {
                return $valida->errors()->toArray()['email'][0]; 
        } 

     
        
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
            'expires_in' => Auth::factory()->getTTL() * 60,
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
        // $this->middleware('guest');
    }

}
