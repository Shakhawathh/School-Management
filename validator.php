<?php


class Validator
{
    public static function  string ($value, $min = 3, $max = 100)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email ($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function password ($value)
    {
        return strlen($value) >= 8;
    }
     public static function number ($value)
    {
        return is_numeric($value);
    }

    
}

