<?php
// Start session
session_start();

// You can also check if the user is logged in, and if not, redirect them
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
