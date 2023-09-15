<?php
include 'config.php';
$name = $_POST['name'];
$email = $_POST['email'];
mysqli_query($conn, "INSERT INTO employees(name,email) VALUES('$name','$email')");
header("Location:index.php");
?>
