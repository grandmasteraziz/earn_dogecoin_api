<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class MobileApp extends Model
{
    use SoftDeletes;
     
    protected $fillable = [
        'title','is_active','photo','package_name','limit','link','price',
    ];
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
