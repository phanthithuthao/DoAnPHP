<?php
class Utilities
{
    public static function get($index, $defaultValue = '')
    {
        return isset($_GET[$index]) ? trim($_GET[$index]) : $defaultValue;
    }

    public static function post($index, $defaultValue = '')
    {
        return isset($_POST[$index]) ? trim($_POST[$index]) : $defaultValue;
    }

    public static function file($index, $defaultValue = '')
    {
        $temp = isset($_FILES[$index]) ? $_FILES[$index] : $defaultValue;
        if ($temp != '') {
            if ($temp['error'] == 0) return $temp;
        }
        return $defaultValue;
    }
}