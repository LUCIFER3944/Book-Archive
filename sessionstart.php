<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['login']) || $_SESSION['login'] !== 'true') {
    // Redirect unauthorized users to login page
    header("Location: login.php");
    exit();
}

// Initialize variables
$fname = "";
$lname = "";
$email = "";
$phone = "";
$address = "";

// Include the database connection
include 'Database.php';
$db = new Database();
$conn = $db->connect(); // Use PDO connection

try {
    // Get and validate user ID from session
    $id = intval($_SESSION['id']); // Use session ID for security

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Fetch the result
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        // Sanitize output to prevent XSS
        $fname = htmlspecialchars($row['fname']);
        $lname = htmlspecialchars($row['lname']);
        $email = htmlspecialchars($row['email']);
        $phone = htmlspecialchars($row['phone']);
        $address = htmlspecialchars($row['address']);
    } else {
        echo "No user data found.";
    }
} catch (PDOException $e) {
    // Log the error for debugging (hide it from users)
    error_log("Database Error: " . $e->getMessage());
    echo "An error occurred. Please try again later.";
}

// Close the database connection
$conn = null; // Properly close the PDO connection
?>
