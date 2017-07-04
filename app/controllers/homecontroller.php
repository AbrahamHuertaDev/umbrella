<?php

/**
 *
 */
class HomeController
{
    public function index()
    {
        echo json_encode(User::all());
    }
}
