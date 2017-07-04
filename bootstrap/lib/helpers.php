<?php

/**
 *
 */
class Helper
{
    static $value;

    public static function assets($file)
    {
        return \Core\App::config('host') . 'public/' . $file;
    }

    public static function request($value)
    {
        $obj = new static();
        self::$value = $value;
        return $obj;
    }

    public function post()
    {
        if(isset($_REQUEST[self::$value]))
        {
          return $_REQUEST[self::$value];
        }
        else {
            throw new Exception('The '. self::$value .' index does not exist in this request');
        }
    }

    public function get()
    {
        if(isset($_GET[self::$value]))
        {
          return $_GET[self::$value];
        }
        else {
            throw new Exception('The '. self::$value .' index does not exist in this request');
        }
    }
}
