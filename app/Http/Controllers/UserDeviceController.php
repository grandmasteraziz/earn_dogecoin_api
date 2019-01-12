<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\UserDevice;
use Illuminate\Support\Facades\Auth;

class UserDeviceController extends Controller
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

    public function addUserDevice(Request $request)
    {
        $this->validate($request, [
            'pseudo_id' => 'required',
            'android_id' => 'required',
            'bt_address' => 'required',
            
        ]);

        $user = Auth::user();

        $userDevice = new UserDevice;
        $userDevice->user_id = Auth::id();
        $userDevice->pseudo_id = $request->pseudo_id;
        $userDevice->android_id = $request->android_id;
        $userDevice->bt_address = $request->bt_address;
        $userDevice->ip = $_SERVER['REMOTE_ADDR'].$_SERVER['REMOTE_PORT'];
        $userDevice->save();

        
       
        return response()->json(['status'=>'success','message'=>'User device created'],200);
    }
   
}
