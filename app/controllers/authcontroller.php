<?php


class AuthController
{
	public function index()
	{
		echo json_encode(User::all());
	}
}
