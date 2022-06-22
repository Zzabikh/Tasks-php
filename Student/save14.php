<?php 
session_start();

$message = $_POST['text'];

$_SESSION['text']= $message;

header('Location: /task_14.php');


?>