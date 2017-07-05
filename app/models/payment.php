<?php

use  Illuminate\Database\Capsule\Manager as Capsule;

/**
 *
 */
class Payment
{

	public static function connect()
	{
		/* Remplaza Payment por el nombre de la tabla ala que quieres llamar */
		return Capsule::table('payments');
	}


    
}
