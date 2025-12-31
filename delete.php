<?php
include 'db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM students WHERE id=?");
$stmt->execute([$id]);

echo "Record Deleted!";
header("Location: index.php");
?>
