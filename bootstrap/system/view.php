<?php

use Philo\Blade\Blade;
/**
 * |
 */
class View
{

	static $view = 'errors.404';
	public $views = 'errors.404';
	public $data = [];

	public function __construct($view)
	{
		$this->views = $view;
		return $this;
	}

  	public static function make($view, $data = [])
  	{
    	self::$view = $view;

    	return new View($view);
  	}

  	public function with($name, $val)
  	{
  		$this->data[$name] = $val;

  		return $this;
  	}

  	public function render()
  	{
	  	$views = APP . 'views';
	    $cache = APP . 'cache';

	    $blade = new Blade($views, $cache);
	    echo $blade->view()->make($this->views, $this->data)->render();
  	}
}	
