<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? $_SESSION['username'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCGBase<?php if(isset($pageTitle)) echo " - $pageTitle"; ?></title>
    <link rel="stylesheet" href="/assets/css/header.css">
    <script src="/assets/js/header_menu.js" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="/index.php" class="logo">TCGBase</a>
            <ul class="nav-links">
                <li><a href="/index.php">Home</a></li>
                <li><a href="/tcg/index.php">TCGs</a></li>
                <?php if($loggedIn): ?>
                    <li><a href="/dashboard.php">My Collection</a></li>
                    <li><a href="/logout.php">Logout (<?php echo htmlspecialchars($username); ?>)</a></li>
                <?php else: ?>
                    <li><a href="/login.php">Login</a></li>
                    <li><a href="/register.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    