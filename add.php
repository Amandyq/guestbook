<?php
include 'db.php';

$name = $_POST['name'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO messages (name, message) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $message);
$stmt->execute();

header("Location: index.php");
exit;
