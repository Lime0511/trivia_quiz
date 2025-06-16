<?php
$host = "sql207.infinityfree.com";
$user = "if0_39239138";
$pass = "Ddo5mZFVcrSpq";
$dbname = "if0_39239138_quiz_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
