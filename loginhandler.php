<?php




require_once "User.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User();
    $result = $user->login($email, $password);

    if ($result) {
        // Start session and store user ID
        session_start();
        $_SESSION['user_id'] = $result['id']; // Store the user ID in the session

        // Redirect to main.php
        header("Location: main.php");
        exit();
    } else {
        // Redirect back to login.php with an error message (optional)
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
}
?>
