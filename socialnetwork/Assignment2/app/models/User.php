<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	
	function friends() {
		return $this->belongsToMany('User', 'friends','user_id', 'friend_id');
	}	
    
	function posts() {
            return $this->hasMany('Post');
        }
	
	public static $rules = array( 
        'email' => 'required|unique:users', 
        'password' => 'required',
        'fullname' => 'required',
        'birthday' => 'required'
    );    
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
