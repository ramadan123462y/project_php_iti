<?php

namespace App\Core;

use App\Core\Request;

class Router
{
    private static $routes = [];

    public static function get($uri, $action)
    {
        self::$routes['GET'][$uri] = $action;
    }

    public static function post($uri, $action)
    {
        self::$routes['POST'][$uri] = $action;
    }

    public static function resolve()
    {
        $uri = Request::uri(); //user/20

     

       
        $method = Request::method();

        if (!isset(self::$routes[$method])) {
            echo "404";
            return;
        }

        foreach (self::$routes[$method] as $route => $action) {

            $routeParts = explode("/", trim($route,"/"));
            $uriParts = explode("/", trim($uri,"/"));

      

            if (count($routeParts) != count($uriParts)) {
                continue;
            }

            $params = [];
            $matched = true;

            foreach ($routeParts as $index => $part) {

                if ($part === $uriParts[$index]) {
                    continue;
                }

                if (str_starts_with($part, "{")) {
                    $params[] = $uriParts[$index];
                    continue;
                }

                $matched = false;
                break;
            }

            if (!$matched) {
                continue;
            }

            [$controller, $methodName] = $action;

            $controller = new $controller;

            return $controller->$methodName(...$params);
        }

        echo "404 Not Found";
    }
}