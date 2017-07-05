<?php

/**
* 
*/
class Str
{
	
	
    public static function before($haystack,$delimiter)
    {
        if (! empty($haystack) && ! empty($delimiter)) {
            if (strpos($haystack, $delimiter) !== false) {
                // separate $haystack in two strings and put each string in an array
                $filter = explode($delimiter, $haystack);
                if (isset($filter[0])) {
                    // return the string before $delimiter
                    return $filter[0];
                }
                return false;
            }
            return false;
        }
        return false;
    }

    public static function after($haystack, $delimiter)
    {
        if (! empty($haystack) && ! empty($delimiter)) {
            if (strpos($haystack, $delimiter) !== false) {
                // separate $haystack in two strings and put each string in an array
                $filter = explode($delimiter, $haystack);
                if (isset($filter[1])) {
                    // return the string after $delimiter
                    return $filter[1];
                }
                return false;
            }
            return false;
        }
        return false;
    }

    public static function between($haystack, $delimiter1, $delimiter2)
    {
        if (! empty($haystack) && ! empty($delimiter1) && ! empty($delimiter2)) {
            if (strpos($haystack, $delimiter1) !== false && strpos($haystack, $delimiter2) !== false) {
                // separate $haystack in two strings and put each string in an array
                $pre_filter = explode($delimiter1, $haystack);
                if (isset($pre_filter[1])) {
                    // remove everything after the $delimiter2 in the second line of the
                    // $pre_filter[] array
                    $post_filter = explode($delimiter2, $pre_filter[1]);
                    if (isset($post_filter[0])) {
                        // return the string between $delimiter1 and $delimiter2
                        return $post_filter[0];
                    }
                    return false;
                }
                return false;
            }
            return false;
        }
        return false;
    }

    public static function contains($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if ($needle != '' && mb_strpos($haystack, $needle) !== false) {
                return true;
            }
        }
        return false;
    }

    public static function url($string)
    {
        return (bool) filter_var($string, FILTER_VALIDATE_URL);
    }

    public static function random($length=32)
    {
        return bin2hex(random_bytes($length / 2));
    }

}