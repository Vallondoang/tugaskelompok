<head>
    <link rel="stylesheet" href="styles3.css">
    <link rel="icon" href=
    "images/Nvidia-Emblem.png"
        type="image/x-icon" />
</head>
<header>
        <div class="container">
            <img src="images/nvidia.png" alt="" id="logo">
            <nav>
                <ul>
                    <li class="homelink"><a href="index.html">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="contactus.html">Contact</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="register.php" class="regislog">Register</a></li>
                    <li><a href="login.php" class="regislog">Login</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
<section class="container1">
<?php
session_start(); // Start the session

// Check if the cart is empty
if (empty($_SESSION['cart'])) {
    echo "<h1 class='ha1'>Your cart is empty!</h1>";
} else {
    echo "<h1 class='ha1'>Your Cart</h1>";
    echo "<ul class='lili'>";
    foreach ($_SESSION['cart'] as $item) {
        echo "<li>{$item['name']} - \${$item['price']}</li>";
    }
    echo "</ul>";
}

// Reset Cart Form
echo '<form action="reset_cart.php" method="post">';
echo '<button type="submit">Reset Cart</button>';
echo "<a href='products.php' class='button'>Back to shopping</a>";
echo '</form>';
?>
</section>
