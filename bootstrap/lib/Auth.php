<?php

/**
* 
*/
class Auth
{
	public static function attempt($credentials, $stay)
	{
		$user = User::where('email', $credentials['email'])->first();

		if($user)
		{
			if(Helper::hash($credentials['password'], $user->password))
			{
				return self::connect($user->id);
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	public static function connect($user)
	{
		Session::set('auth', $user);

		return true;
	}

	public static function logout()
	{
		Session::remove('auth');

		return true;
	}

	public static function user()
	{
		return User::find(Session::get('auth'));
	}
}