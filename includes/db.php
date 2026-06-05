<?php
$host = 'localhost';
$dbname = 'digambar-samaj';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Set default fetch mode to associative arrays
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Note: The database schema is managed externally via database.sql
    // We no longer attempt to auto-create tables on connection to improve performance
    // and maintain a strict separation of concerns for the production environment.

} catch(PDOException $e) {
    // Log the actual error internally (ensure error logging is configured in php.ini)
    error_log("Database connection failed: " . $e->getMessage());
    // Display a generic error message to the user
    die("Database connection failed. Please try again later.");
}
?>
