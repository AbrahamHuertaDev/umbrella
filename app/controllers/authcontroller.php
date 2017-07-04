<?php

/**
*
*/
class AuthController
{
	public function index()
	{
		echo Helper::request('email')->get();
	}
}
