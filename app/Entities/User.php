<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    /*
    THE ORM database attributes
     */

    public 		$timestamps 	= true;
    protected 	$table 			= 'users';
    protected 	$fillable 		= ['cpf', 'name', 'phone', 'email', 'password','status','permission'];
    protected 	$hidden 		= ['password', 'remember_token'];

    public function setPasswordAttribute($value){ 

    	$this->attributes['password'] = env('PASSWORD_HASH') ? bcrypt($value) : $value;

    }

}

