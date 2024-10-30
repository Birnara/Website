<?php
include 'dbconnect.php';
$result = $conn->query("SELECT * FROM transactions");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transaction History - NestBank</title>
</head>
<body>
    <h2>Transaction History</h2>
    <table border="1">
        <tr>
            <th>From</th>
            <th>To</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['from_customer']; ?></td>
            <td><?php echo $row['to_customer']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['date']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
