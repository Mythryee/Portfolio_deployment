<?php
$servername = "mysql"; // Service name from docker-compose
$username = getenv('MYSQL_USER') ?: 'portfolio_user';
$password = getenv('MYSQL_PASSWORD') ?: 'portpass';
$dbname = getenv('MYSQL_DATABASE') ?: 'portfolio';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
