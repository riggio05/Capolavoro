<?php
$servername = 'localhost';
$dbName = 'pctodatabase';
$username = 'root';
$password = '';

$conn = null;

try {
    $conn = new PDO("mysql:host=$servername; dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$db = new DB\SQL('mysql:host=localhost;port=3306;dbname=pctodatabase', 'root', '');

?>