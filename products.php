<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=
    "images/Nvidia-Emblem.png"
        type="image/x-icon" />
    <link rel="stylesheet" href="styles.css">
    <title>Online Store</title>
</head>
<body>
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
    <section class="products">
    <h1 class="producttype">Featured Products</h1>
    <div class="product-list">
    <div class="product-item">
    <form action="add_to_cart.php" method="post">
        <img src="images/2080ti.png" alt="Product 1">
        <h3>RTX 2080ti</h3>
        <p>$1299.99</p>
        <input type="hidden" name="product_name" value="RTX 2080ti">
        <input type="hidden" name="product_price" value="1299.99">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="product-item">
    <form action="add_to_cart.php" method="post">
        <img src="images/Frame 2.png" alt="Product 2">
        <h3>RTX 4090</h3>
        <p>$2199.99</p>
        <input type="hidden" name="product_name" value="RTX 4090">
        <input type="hidden" name="product_price" value="2199.99">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="product-item">
    <form action="add_to_cart.php" method="post">
        <img src="images/3060.png" alt="Product 3">
        <h3>RTX 3060</h3>
        <p>$204.99</p>
        <input type="hidden" name="product_name" value="RTX 3060">
        <input type="hidden" name="product_price" value="204.99">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="product-item">
    <form action="add_to_cart.php" method="post">
        <img src="images/assets.indogamers.png" alt="Product 4" width="1078" height="606">
        <h3>Razer Blade 18</h3>
        <p>$4499.99</p>
        <input type="hidden" name="product_name" value="Razer Blade 18">
        <input type="hidden" name="product_price" value="4499.99">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="product-item">
    <form action="add_to_cart.php" method="post">
        <img src="images/kv.png" alt="Product 5" width="2560" height="1440">
        <h3>Asus Tuff 15</h3>
        <p>$1143.33</p>
        <input type="hidden" name="product_name" value="Asus Tuff 15">
        <input type="hidden" name="product_price" value="1143.33">
        <button type="submit">Add to Cart</button>
    </form>
</div>

<div class="product-item">
    <form action="add_to_cart.php" method="post">
        <img src="images/image (4).png" alt="Product 6" width="2560" height="1440">
        <h3>Razer Blade 18</h3>
        <p>$4499.99</p>
        <input type="hidden" name="product_name" value="Razer Blade 18">
        <input type="hidden" name="product_price" value="4499.99">
        <button type="submit">Add to Cart</button>
    </form>
</div>
        
    </div>
</section>
</body>
