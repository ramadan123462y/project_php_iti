<?php

function url($path = '')
{
    $base = "/ITI_PHP/php-project/public";

    return $base . "/" . trim($path, "/");
}

