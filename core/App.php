<?php


class App
{
    protected static $registry = []; // ['config' => [] , "database" => QueryBuilder]

    public static function bind($key , $value) //Bind to container
    {
        static::$registry[$key] = $value;
    }

    public static function get($key) //Get from container
    {
        if(! array_key_exists($key , static::$registry)){
            throw new Exception("No {$key} is bound in the container.");
        }
        return static::$registry[$key];
    }
}