<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MobileApp;
use App\User;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
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

    public function index()
    {
     return  MobileApp::all();
    }

    public function show($mAppID)
    {
        $mApp = MobileApp::findOrFail($mAppID);
        return $mApp;
    }


   public function store(Request $request)
   {
    $this->validate($request, [
        'appId' => 'required',
    ]);

     $mAppID = $request->appId;

     $authUser = Auth::user();

     $mApp = MobileApp::findOrFail($mAppID);

     if(!$mApp)
     {
        return response()->json(['status'=>'error','message' => 'App not found'],404);
     }

     $userCount =  $mApp->users()->get()->count();

       
     if($mApp->limit == $userCount || $userCount >= $mApp->limit )
     {
         $mApp->is_active = 0;
         $mApp->save();
         $mApp->delete();
         return response()->json(['status'=>'error','message' => 'App is deactive!'],200);
     }

     $mApp->users()->attach($authUser,['active' => 0,'created_at' =>date("Y-m-d H:i:s") ]);


    return response()->json(['message'=>'success'],200);
   }

   public function update(Request $request,$mAppID)
   {
       $mApp = MobileApp::findOrFail($mAppID);
       $mApp->update($request->all());

       return response()->json(['status'=>'success','app' => $mApp],200);
       
   }

   public function destroy($mAppID)
   {
      if(MobileApp::destroy($myAppID))
      {
        return response()->json(['status'=>'success','message' => 'App deleted successfuly'],200);
      }
      return response()->json(['status'=>'error','message' => 'Something went wrong'],200);
   }


   public function calculateLimit($id)
   {
      
        $app = MobileApp::find($id);
      
        $userCount =  $app->users()->get()->count();

       
       if($app->limit == $userCount || $userCount >= $app->limit )
       {
           $app->is_active = 0;
           $app->save();
           return response()->json(['status'=>'error','message' => 'App is deactive!'],200);
       }


        return $users; 

   }

   public function calculatePrice()
   {
        $authUser = Auth::user();
      
        $prices = $authUser->apps()->where(['active' => 1])->get()->pluck('price');

        $balance=0;

        foreach($prices as $price)
        {
            $balance += $price;

        }

        $authUser->balance = $balance;
        $authUser->save();


        return response()->json(['data'=>$authUser],200);
   }


}
