<?php

session_start();

$users = [
        array(
            "username" => "user numero 0",
            "email" => "email@hotmail.com"
        ),

        array(
            "username" => "user1",
            "email" => "email@hotmail.com"
        ),
    ];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
