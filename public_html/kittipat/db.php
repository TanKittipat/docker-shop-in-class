<?php
$servername = "db";
$username = "admin";
$password = "1234";

try {
    $conn = new PDO("mysql:host=$servername;dbname=sample_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>console.log('Connected successfully')</script>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
