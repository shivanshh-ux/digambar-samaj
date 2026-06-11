<?php
require_once 'includes/db.php';

try {
    $sql = "ALTER TABLE users MODIFY COLUMN status ENUM('account_pending','account_approved','pending','approved','rejected','blocked') DEFAULT 'account_pending'";
    $pdo->exec($sql);
    echo "Successfully updated users table status ENUM.\n";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
