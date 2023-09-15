<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD Example</title>
</head>
<body>
    <h2>Employee Records</h2>
    <a href="create.php">Add New Employee</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        include 'config.php';
        $result = mysqli_query($conn, "SELECT * FROM employees");
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
