<?php


class AuthController
{
	public function index()
	{
		return View::make('home')->render();
	}

	public function users()
	{
		return Response::json(User::all());
	}
}
