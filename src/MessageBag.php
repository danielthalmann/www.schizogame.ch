<?php

class MessageBag
{
    static protected $bag = [];

    function __construct()
    {

    }

    /**
     * return content of bag
     * @param mixed $key
     */
    static function get($key, $default = null) {
        return self::$bag[$key] ?? $default;
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    static function set($key, $value)
    {
        self::$bag[$key] = $value;
    }

}

