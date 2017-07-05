<?php

use  Illuminate\Database\Capsule\Manager as Capsule;

/**
 *
 */
class Payment  extends Illuminate\Database\Eloquent\Model
{

	public static function connect()
	{
		/* Remplaza Payment por el nombre de la tabla ala que quieres llamar */
		return Capsule::table('payments');
	}


    
}
