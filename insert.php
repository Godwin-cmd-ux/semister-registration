<?php
$conn= new mysqli('localhost','root','','myfiles_db');
move_uploaded_file($_FILES['sorry']['tmp_name'], 'sorry.mp4');
$stmt = $conn->prepare("INSERT INTO videos (title, video) VALUES (?, ?)");
$stmt->bind_param("ss", $title, $path);
$stmt->execute();

?>
