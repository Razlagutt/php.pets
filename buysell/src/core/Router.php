<?php

namespace app\core;

class Router
{
    private array $routes = [];
    // private string $uri = "";

    public function __construct()
    {
        $this->routes = require_once "../src/routes.php";
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getUri()
    {
        return $this->routes[
            parse_url($_SERVER["REQUEST_URI"])["path"]
        ];
    }
}