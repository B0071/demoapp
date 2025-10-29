<?php

namespace Core;

use Exception;

class Container
{
    public $bindings = [];

    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    public function resolve($key)
    {
        if (! array_key_exists($key, $this->bindings)) {
            throw new Exception("Nothing found for '{$key}' in the container");
        }
        return call_user_func($this->bindings[$key]);
    }
}
