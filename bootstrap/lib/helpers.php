<?php

/**
 *
 */
class Helper
{
    static $value;

    public static function assets($file)
    {
        $url = str_replace('\\', '', '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));
        //$url = DIR;

        return $url . '/public/' . $file;
    }

    public static function hash($val, $type = '')
    {
        if($type !== '')
        {
            return password_verify($val, $type);
        }
        else
        {
            return password_hash($val, PASSWORD_BCRYPT);
        }
    }

    public static function dump($v)
    {
        echo "<pre>";
        var_dump($v);
        echo "</pre>";
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
