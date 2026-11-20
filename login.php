<?php

session_start();

// Predefined username and password
$correct_username = "admin";
$correct_password = "12345";

// Get submitted information
$username = trim($_POST["username"] ?? "");
$password = $_POST["password"] ?? "";

// Check username and password
if (
    $username === $correct_username &&
    $password === $correct_password
) {

    // Create login session
    session_regenerate_id(true);

    $_SESSION["username"] = $username;

    // Proceed to dashboard
    header("Location: dashboard.php");
    exit;

} else {

    // Incorrect login
    header("Location: index.php?error=1");
    exit;

}

?>