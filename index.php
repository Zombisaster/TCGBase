<?php
include 'includes/header.php';
include 'includes/db.php';

$result = $conn->query("SELECT * FROM tcgs");
while ($row = $result->fetch_assoc()) {
    echo htmlspecialchars($row['name']) . "<br>";
}
?>

<html>
    <head>

    </head>
    <body>

    </body>
</html>

<?php include 'includes/footer.php'; ?>