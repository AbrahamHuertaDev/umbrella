<?php

use  Illuminate\Database\Capsule\Manager as Capsule;

/**
 *
 */
class User extends Illuminate\Database\Eloquent\Model
{

	public static function connect()
	{
		return Capsule::table('users');
	}

	public function trips()
	{
		return $this->hasMany('Trip');
	}
    
}
