<?php
$host = "localhost";
$user = "root"; // your MySQL username
$pass = ""; // your MySQL password
$dbname = "school_db";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database Connected Successfully!";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
