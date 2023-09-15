<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h2>Edit Employee</h2>
    <?php
    include 'config.php';
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM employees WHERE id='$id'");
    $row = mysqli_fetch_array($result);
    ?>
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
