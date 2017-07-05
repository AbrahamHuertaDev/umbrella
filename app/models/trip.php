<?php

use  Illuminate\Database\Capsule\Manager as Capsule;

/**
 *
 */
class Trip
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
