<?php
session_start(); // Start the session

// Clear the cart by unsetting the cart session variable
if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']); // Remove the cart from the session
}

// Redirect back to the cart page (or any other page)
header("Location: cart.php"); // Change to your cart page
exit(); // Make sure to exit after redirection
?>
