<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "portfolio_system";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed. Please try again later.");
}

$conn->set_charset("utf8mb4");
?>
