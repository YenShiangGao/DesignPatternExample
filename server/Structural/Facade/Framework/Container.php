<?php

namespace Framework;

class Container
{
    protected static $bindings = [];

    public static function bind($key, $instance)
    {
        static::$bindings[$key] = $instance;
    }

    public static function make($key)
    {
        if (!isset(static::$bindings[$key])) {
            throw new \Exception("Service {$key} not found in container.");
        }
        return static::$bindings[$key];
    }
}
