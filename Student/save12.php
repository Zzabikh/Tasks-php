<?php 
session_start();
$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost; dbname=users;", "root", "");

$sql = "SELECT * FROM my_table WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)){
	$message = "Введённая запись уже присутвует в таблице";
	$_SESSION['danger'] = $message;
	header("Location: /task_12.php");
	exit;
}

$sql = "INSERT INTO my_table (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

$message = "Вы ввели новую запись в таблицу";
$_SESSION['success'] = $message;


header('Location: /task_12.php');

?>