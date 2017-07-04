<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public function userType(){
    	
    	return $this->belongsTo('App\User', 'user_type', 'user_type');
    }
}
