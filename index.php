<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Portal</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="login-container">

    <div class="login-box">

        <h1>Welcome Back!</h1>
        <p>Please login to your account.</p>

        <?php
        if (isset($_GET["error"])) {
            echo "<div class='error'>Invalid username or password!</div>";
        }
        ?>

        <form action="login.php" method="POST" id="loginForm">

            <label>Username</label>
            <input
                type="text"
                name="username"
                id="username"
                placeholder="Enter username"
                required
            >

            <label>Password</label>
            <input
                type="password"
                name="password"
                id="password"
                placeholder="Enter password"
                required
            >

            <div class="show-password">
                <input type="checkbox" id="showPassword">
                <label for="showPassword">Show Password</label>
            </div>

            <button type="submit">LOGIN</button>

        </form>

        <div class="footer">
            Login Portal | PHP and JavaScript
        </div>

    </div>

</div>

<script src="js/script.js"></script>

</body>
</html>