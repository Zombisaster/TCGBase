<?php
// Database connection

// Credentials
$host = 'localhost';        // XAMPP default
$db   = 'tcgbase';          // Database name for TCGBase
$user = 'root';             // Default XAMPP username
$pass = '';                 // Default XAMPP password (empty)
$charset = 'utf8mb4';       // UTF-8 charset for international text

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Set charset
$conn->set_charset($charset);
?>
