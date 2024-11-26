<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "niramoy";  // Update to the correct database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Failed to connect to DB: " . $conn->connect_error);
}
?>
