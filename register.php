<?php

require 'controllers\bootstrap.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  session_start();
  if (isset($_SESSION["User"]) && isset($_SESSION["Pass"])) {
    header("location: To-Do.php");
    exit;
  }else {
    session_destroy();
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  try {
    $register = $Tasker['database']->InsertUser('users', $_POST["Username"], $_POST["Password"], $_POST["Name"]);
    header("location: login.php");
    exit;
  } catch (\Exception $e) {
    die("Anything is wrong:".$e);
  }
}


require 'views/Register.view.php';
