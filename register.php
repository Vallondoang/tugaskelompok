<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the username and password in session variables
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
    $success_message = "Registration successful! You can now log in.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
    <section class="container">
    <h2>Register</h2>
    <?php if (isset($success_message)) { echo "<p style='color:green;'>$success_message</p>"; } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <input type="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
    </section>
</body>
</html>