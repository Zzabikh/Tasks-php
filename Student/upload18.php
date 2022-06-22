<?php 

    $count = count($_FILES['img']['name']);

    for ($i=0; $i < $count; $i ++){

	$filename = upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);

	$pdo = new PDO("mysql:host=localhost;dbname=users;", "root", "");
    $sql = "INSERT INTO images (image) VALUES (:image)";
	$statement = $pdo->prepare($sql);
    $statement->execute(['image' => $filename]);
}





function upload_file($filename, $tmp_name){
  $result = pathinfo($filename);

  $filename = uniqid() . "." .$result['extension'];

  move_uploaded_file($tmp_name, 'uploads/' . $filename);

  return $filename;
  
}



//header('Location: /task_18.php');

?>