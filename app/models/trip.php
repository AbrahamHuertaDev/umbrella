<?php

use  Illuminate\Database\Capsule\Manager as Capsule;

/**
 *
 */
class Trip extends Illuminate\Database\Eloquent\Model
{

	public static function connect()
	{
		return Capsule::table('trips');
	}
    
    public function payments()
    {
    	return $this->hasMany('Payment');
    }
}
