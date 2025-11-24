<?php
include 'includes/db.php'; // sets up $conn

// Now you can query the database
$result = $conn->query("SELECT * FROM tcgs");
while ($row = $result->fetch_assoc()) {
    echo htmlspecialchars($row['name']) . "<br>";
}
?>
