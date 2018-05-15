<?php

require 'controllers\bootstrap.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  session_start();
  if (!(isset($_SESSION["User"]) && isset($_SESSION["Pass"]) && isset($_SESSION["TCode"]))) {
    session_destroy();
    header("location: login.php");
    exit;
  }else {
    try {
      $TaskList=[];
      $TaskList = $Tasker['database']->Search('tasks_list','UserTaskCode', $_SESSION["TCode"]);
    } catch (\Exception $e) {
      die("Anything is wrong:".$e);
    }
  }
}

require 'views/To-Do.view.php';
