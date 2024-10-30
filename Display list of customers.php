<?php
include 'dbconnect.php';
$result = $conn->query("SELECT * FROM customers");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NestBank Customers</title>
</head>
<body>
    <h2>Customer List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Balance</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['balance']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
