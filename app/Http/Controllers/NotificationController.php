<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Notification;
use App\User;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
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
     $notifications = Notification::all();
     return response()->json(['status'=>'success','notifications'=>$notifications],200);
    }

    public function show($id)
    {
        $notification = Notification::findOrFail($id);
        return response()->json(['status'=>'success','notification'=>$notification],200);
    }


   public function store(Request $request)
   {
    $this->validate($request, [
        'title' => 'required',
        'topic' => 'required',
    ]);
    $authUser = Auth::user();

    if($authUser->is_admin != '1')
    {
     return response()->json(['status'=>'error','message'=>'Unautherize User'],401);
    }

 

     $notification =new  Notification;
     $notification->title = $mAppID = $request->title;
     $notification->topic = $mAppID = $request->topic;
     $notification->save();
 


    return response()->json(['message'=>'success'],200);
   }

   public function update(Request $request,$id)
   {
        $authUser = Auth::user();

        if($authUser->is_admin != '1')
        {
        return response()->json(['status'=>'error','message'=>'Unautherize User'],401);
        }

       $mApp = Notification::findOrFail($mAppID);
       $mApp->update($request->all());

       return response()->json(['status'=>'success','app' => $mApp],200);
       
   }

   public function destroy($id)
   {
        $authUser = Auth::user();
        if($authUser->is_admin != '1')
        {
        return response()->json(['status'=>'error','message'=>'Unautherize User'],401);
        }

      if(Notification::destroy($id))
      {
        return response()->json(['status'=>'success','message' => 'App deleted successfuly'],200);
      }
      return response()->json(['status'=>'error','message' => 'Something went wrong'],200);
   }


}
