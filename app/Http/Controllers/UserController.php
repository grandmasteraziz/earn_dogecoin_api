<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addUserDogeWallet(Request $request)
    {
        $this->validate($request, [
            'wallet' => 'required|max:34',
            
        ]);

        $user = Auth::user();
        $user->doge_wallet = $request->wallet;
        $user->save();
       
        return response()->json(['status'=>'success','message'=>'wallet is created'],200);
    }
    
    public function addUserGoogleName(Request $request)
    {
        $this->validate($request, [
            'google_name' => 'required',
            
        ]);

        $user = Auth::user();
        $user->google_name = $request->google_name;
        $user->save();
       
        return response()->json(['status'=>'success','message'=>'google name is created'],200);
    }


    public function getUserAccount()
    {
        $user = Auth::user();

        return response()->json(['status'=>'success','user'=>$user],200);
    }
}
