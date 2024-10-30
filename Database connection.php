<?php
$conn = new mysqli("localhost", "root", "", "nestbank");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
