<?php
$conn = mysqli_connect("localhost", "username", "", "crud");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
