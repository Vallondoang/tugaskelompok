<?php
session_start();

// Initialize error message
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the session variables are set
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        // Validate credentials
        if ($username === $_SESSION['username'] && password_verify($password, $_SESSION['password'])) {
            // Redirect to success page
            header("Location: main.html");
            exit;
        } else {
            $error = "Invalid passcode.";
        }
    } else {
        $error = "No user registered. Please register first.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <h2>Login</h2>
    <?php if ($error) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</div>
</body>
</html>