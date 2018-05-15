<?php

require 'controllers\bootstrap.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  session_start();
  if (!(isset($_SESSION["User"]) && isset($_SESSION["Pass"]) && isset($_SESSION["TCode"]))) {
    session_destroy();
    header("location: login.php");
    exit;
  }
}else {
  try {
    $register = $Tasker['database']->InsertTask('tasks_list', $taskName, $description, $UserTaskCode);
  } catch (\Exception $e) {
    die("Anything is wrong:".$e);
  }
}

require 'views/AddTask.view.php';
