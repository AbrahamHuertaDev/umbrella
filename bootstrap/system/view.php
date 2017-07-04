<?php

use Spatie\Blade\Blade;
/**
 * |
 */
class View
{

  public static function make($view, $data = [])
  {
    $views = APP . 'views';
    $cache = APP . 'cache';

    $blade = new Blade($views, $cache);
    echo $blade->view()->make($view, $data);
  }
}
