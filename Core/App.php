<?php

namespace Core;

class App
{
    protected static $connections;

    public static function setContainer($container)
    {
        return static::$connections = $container;
    }

    public static function container()
    {
        return static::$connections;
    }

    public static function resolve($key)
    {
        return static::$connections->resolve($key);
    }
}
