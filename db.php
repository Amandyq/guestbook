<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "guestbook";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Қосылу қатесі: " . $conn->connect_error);
}
?>
