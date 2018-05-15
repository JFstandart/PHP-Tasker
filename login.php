<?php

require 'controllers\bootstrap.php';

$error="";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    session_start();
    if (isset($_SESSION["User"]) && isset($_SESSION["Pass"])) {
        header("location: To-Do.php");
        exit;
    } else {
        session_destroy();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $register = $Tasker['database']->Search('users', 'UserName', $_POST["Username"]);
        if ($register[0]->UserPassword == $_POST["Password"]) {
            session_start();
            $_SESSION["User"]=$_POST["Username"];
            $_SESSION["Pass"]=$_POST["Password"];
            $_SESSION["TCode"]=$register[0]->UserTaskCode;
            header("location: To-Do.php");
            exit;
        } else {
            $error="Wrong password";
            header("location: login.php");
            exit;
        }
    } catch (\Exception $e) {
        die("Anything is wrong:".$e);
    }
}


require 'views/Login.view.php';
