<?php
include "db.php";

$result = $conn->query("SELECT name, percentage FROM leaderboard ORDER BY percentage DESC LIMIT 10");

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
