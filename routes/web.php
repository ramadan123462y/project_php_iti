<?php

use App\Core\Router;
use App\Controllers\UserController;

Router::get('/users', [UserController::class,'index']);

Router::get('/users/{id}', [UserController::class,'show']);