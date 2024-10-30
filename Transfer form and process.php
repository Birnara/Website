<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_id = $_POST['from'];
    $to_id = $_POST['to'];
    $amount = $_POST['amount'];

    // Deduct amount
    $conn->query("UPDATE customers SET balance = balance - $amount WHERE id = $from_id");
    // Add amount
    $conn->query("UPDATE customers SET balance = balance + $amount WHERE id = $to_id");

    // Record transaction
    $conn->query("INSERT INTO transactions (from_customer, to_customer, amount) VALUES ($from_id, $to_id, $amount)");

    echo "Transfer successful!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transfer Money - NestBank</title>
</head>
<body>
    <h2>Transfer Money</h2>
    <form method="POST">
        From Account ID: <input type="number" name="from" required><br>
        To Account ID: <input type="number" name="to" required><br>
        Amount: <input type="number" name="amount" required><br>
        <button type="submit">Transfer</button>
    </form>
</body>
</html>
