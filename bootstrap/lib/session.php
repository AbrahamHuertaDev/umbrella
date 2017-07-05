<?php

/**
* 
*/
class Session
{
	
	public static function set($name, $val)
	{
		$_SESSION[$name] = $val;
	}

	public function get($name)
	{
		return $_SESSION[$name];
	}

	public function remove($name)
	{
		unset($_SESSION[$name]);
	}
}