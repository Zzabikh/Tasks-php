<?php 

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost; dbname=users;", "root", "");

$sql = "SELECT * FROM task_13 WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);


if(!empty($user)){
	$_SESSION['error'] = "Пользователь уже зарегестрирован";
	header('Location: /task_13.php');
    exit;
}



$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO task_13 (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email, 'password'=>$hashed_password]);

$message = "Вы успешно зарегестрированы";
$_SESSION ['success'] = $message;

header('Location: /task_13.php');

?>