<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class AuthController extends Controller
{
    
    public function __construct()
    {
        //
    }

    public function register(Request $request){

        

     $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'api_token' => str_random(50),
            'balance' => 0,
            'is_banned' => 0,
            'is_admin' => 0,
            'password' => Hash::make($request->password)
         
        ]);

        return response()->json(['status'=>'success','user'=>$user],201);
    }
    

    public function login(Request $request)
    {
       $user = User::where('email',$request->email)->first();

       if(!$user)
       {
        return response()->json(['status'=>'error','message'=>'User Not Found'],404);
       }

       if (Hash::check($request->password, $user->password))
       {
            if($user->is_banned ==1){
                return response()->json(['status'=>'error','message'=>'Banned User'],401);
            }

           $user->api_token = str_random(50);
           $user->save();
        return response()->json(['status'=>'success','user'=>$user],200);
       }
       
       return response()->json(['status'=>'error','message'=>'Invalid Credentials'],401);
    }


    public function logOut(Request $request)
    {
       $api_token = $request->api_token;

       $user = User::where('api_token',$api_token)->first();

       if(!$user)
       {
        return response()->json(['status'=>'error','message'=>'Not Logged In'],401);
       }

       $user->api_token = null;
       $user->save();

       return response()->json(['status'=>'success','message'=>'You are now logged out'],401);
    }
}
