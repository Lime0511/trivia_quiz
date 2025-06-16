<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include database connection
include "db.php";

// Get POST data
$name = $_POST['name'] ?? '';
$percentage = $_POST['percentage'] ?? '';

// Validate and insert
if ($name && $percentage !== '') {
    $stmt = $conn->prepare("INSERT INTO leaderboard (name, percentage) VALUES (?, ?)");
    $stmt->bind_param("si", $name, $percentage);
    if ($stmt->execute()) {
        echo "✅ Score saved successfully!";
    } else {
        echo "❌ DB Error: " . $stmt->error;
    }
} else {
    echo "❌ Missing name or percentage!";
}
?>
