<?php

use App\Core\Router;
use App\Controllers\UserController;

//user routes test
Router::get('/users', [UserController::class,'index']);
Router::get('/users/create', [UserController::class,'create']);
Router::get('/users/{id}', [UserController::class,'show']);
Router::post('/users', [UserController::class,'store']);
Router::get('/users/{id}/edit', [UserController::class,'edit']);
Router::post('/users/{id}/update', [UserController::class,'update']);
Router::post('/users/{id}/delete', [UserController::class,'delete']);
