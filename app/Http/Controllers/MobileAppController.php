<?php

namespace App\Http\Controllers;

use App\MobileApp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
 

class MobileAppController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index()
    {
    
      $authUser = Auth::user();
      
      //  $authApps = $authUser->apps()->where(['active' => 1])->get()->pluck('id');
      $authApps = $authUser->apps()->get()->pluck('id');
       
      $apps =   MobileApp::whereNotIn('id', $authApps)->get();

      // $apps = MobileApp::where('isactive', 1);
       //$a = $apps->except($authApps)->get();

       return response()->json(['status'=>'success','apps'=>$apps],200);
    }

    public function show($mAppID)
    {
        $mApp = MobileApp::findOrFail($mAppID);
        return $mApp;
    }


   public function store(Request $request)
   {
    $base_url= rtrim(app()->basePath('public/'.'public'), '/');
    
 
//echo $base_url;
//die();
   
    
       $authUser = Auth::user();

       if($authUser->is_admin != '1')
       {
        return response()->json(['status'=>'error','message'=>'Unautherize User'],401);
       }

       $this->validate($request,[
        'title' => 'required',
        'price' => 'required',
        'package_name' => 'required',
        'limit' => 'required',
        'link' => 'required',
        'photo' => 'required|image'
    ]);   


        if ($request->file('photo')->isValid()){
            
            $imageName = md5(uniqid(rand(), true)).'.'.$request->file('photo')->getClientOriginalExtension();
            $photoName = $imageName; 
            $image = $request->file('photo');
            $path=$request->file('photo')->move($base_url,$imageName);

            
     //x   $path= Storage::($imageName ,$image);

              
        }else{
            return response()->json(['status'=>'error','message'=>'Invalid photo format'],200);
        } 

   $app = MobileApp::create([
        'title' => $request->title,
        'price' => $request->price,
        'package_name' => $request->package_name,
        'limit' => $request->limit,
        'link' => $request->link,
        'photo'  => $imageName,
        'active' => 1
        

    ]);

    return response()->json(['status'=>'success','app'=>$app],200);
   }

   public function update(Request $request,$mAppID)
   {
       $mApp = MobileApp::findOrFail($mAppID);
       $mApp->update($request->all());

       return response()->json(['status'=>'success','app' => $mApp],200);
       
   }

   public function destroy($mAppID)
   {
           $app =  MobileApp::findOrFail($myAppID);

      if($app)
      {
          $app->delete();

        return response()->json(['status'=>'success','message' => 'App deleted successfuly'],200);
      }
      return response()->json(['status'=>'error','message' => 'Something went wrong'],200);
   }


}
