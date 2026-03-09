<?php

namespace App\Core;

class Request
{
    public static function uri()
    {
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

        $base = "/ITI_PHP/php-project/public";

        $uri = str_replace($base, "", $uri);

        return trim($uri, "/");
    }

    public static function method()
    {
        return $_SERVER["REQUEST_METHOD"];
    }
}
