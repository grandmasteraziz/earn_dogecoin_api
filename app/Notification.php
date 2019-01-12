<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\MobileApp;
use App\User;


class Notification extends Model
{
    
    protected $fillable = [
    	 'title',
    	'topic',
    ];
 
}
