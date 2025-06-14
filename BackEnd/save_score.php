<?php
include "db.php";

$name = $_POST['name'] ?? '';
$percentage = $_POST['percentage'] ?? '';

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
