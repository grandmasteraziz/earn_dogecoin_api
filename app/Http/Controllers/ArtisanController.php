<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function routeClear(){ 

        $exitCode = Artisan::call('route:clear');

        return response()->json(['status'=>'success route clear'],200);
    }

    public function cacheClear(){ 

        $exitCode = Artisan::call('cache:clear');

        return response()->json(['status'=>'success cache clear'],200);
    }
    
  
  


  
}
