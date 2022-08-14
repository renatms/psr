<?php

namespace Framework\Http\Router;

class Route
{
    public $name;
    public $pattern;
    public $handler;
    public $method;
    public $tokens;

    public function __construct($name, $pattern, $handler, $method, $tokens)
    {
        $this->name = $name;
        $this->pattern = $pattern;
        $this->handler = $handler;
        $this->method = $method;
        $this->tokens = $tokens;
    }

}