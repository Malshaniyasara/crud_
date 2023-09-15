<?php
include 'config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
mysqli_query($conn, "UPDATE employees SET name='$name', email='$email' WHERE id='$id'");
header("Location:index.php");
?>
