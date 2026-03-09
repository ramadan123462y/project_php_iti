<?php

namespace App\Controllers;


use App\Core\QueryBuilder;

class UserController extends Controller
{

    public function index()
    {
        $users = QueryBuilder::table("users")->get();

        $this->view("users/index", [
            "users" => $users
        ]);
    }


    public function show($id)
    {
        $user = QueryBuilder::table("users")
            ->where("id", $id)
            ->first();

        $this->view("users/show", [
            "user" => $user
        ]);
    }
}
