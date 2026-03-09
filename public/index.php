<?php

use App\Core\Router;

require "../App/Core/Router.php";
require "../App/Core/Request.php";
require "../App/helpers.php";

spl_autoload_register(function ($class) {

    $class = str_replace("\\", "/", $class);

    require "../" . $class . ".php";

});

require "../routes/web.php";

Router::resolve();