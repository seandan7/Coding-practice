<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function setPasswordAttribue($value){
		$this->attibutes['password'] = Hash::make($value);
	}
	
	public function book(){
		return $this->hasMany('Book');
	}
	
	public static function validate($input){
		$rules = array(
			'username' => 'required|min:3|max:50|alphanum|unique:users',
			'email'=> 'required|email|unique:users',
			'password' => 'required|between:4,10|confirmed|alphanum',
			'password_confirmation' => 'required|between:4,10'
		);
		
		return Validator::make($input,$rules);
	}
}
