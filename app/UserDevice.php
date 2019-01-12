<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class UserDevice extends Model
{
     
    protected $fillable = [
            'user_id',
            'pseudo_id',
            'android_id',
            'bt_address',
            'ip',
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
