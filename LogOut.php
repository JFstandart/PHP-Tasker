<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    session_destroy();
    header("location: login.php");
    exit;
}
