<?php 

for ($i=0; $i < count($_FILES['image']['name']); $i ++) {
   upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}

function upload_file($filename, $tmp_name) {
$result = pathinfo($filename);

$filename = uniqid() . "." .$result['extension'];

move_uploaded_file($tmp_name, 'uploads/' . $filename);
}

header('Location: /lesson4.php');
?>