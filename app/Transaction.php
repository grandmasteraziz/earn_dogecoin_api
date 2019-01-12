<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\MobileApp;
use App\User;


class Transaction extends Model
{
    
    protected $fillable = [
    	 'active',
    	'user_id',
    	'mobile_app_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function mobileApp()
    {
    	return $this->belongsTo(MobileApp::class);
    }

     
}
