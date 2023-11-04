<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzalia</title>
    <link rel="stylesheet" href="style-checkout.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header">
        <a href="#" class="Logo">Pizza<span>lia</span></a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="contact.php">Contact</a>
            <a href="feedback.php">Feedback</a>
        </nav>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <!-- Display user's full name and logout button -->
        <div class="user-info">
            <span>Welcome,
                <?php echo htmlspecialchars($_SESSION['fullname']); ?>!</span>
            <button class="btn" onclick="location.href='logout.php'">Logout</button>
        </div>
        <?php else: ?>
        <!-- Display login button -->
        <button class="btn" onclick="location.href='login.php'">Login</button>
        <?php endif; ?>
    </header>

    <div class="main-container">
        <section class="Dishes-section">
            <div class="dishGallery">
                <div class="food-category">
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
                    <form action="submit-order.php" method="post" onsubmit="submitOrder()">
                        <div class="user-details">
                            <h2>My Details</h2>
                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" name="fullname"
                                    value="<?php echo htmlspecialchars($_SESSION['fullname']); ?>"
                                    readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="email" name="email"
                                    value="<?php echo htmlspecialchars($_SESSION['email']); ?>"
                                    readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">Mobile Number</span>
                                <input type="tel" name="mobile" placeholder="Enter your mobile number" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Delivery Address</span>
                                <input type="text" name="address" placeholder="Enter your delivery address" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Delivery Time</span>
                                <input type="time" name="delivery_time" required>
                            </div>
                            <div class="button">
                                <input type="submit" value="Place Order">
                            </div>
                            <input type="hidden" id="cartContent" name="cartContent">
                            <input type="hidden" id="cartTotal" name="cartTotal">
                        </div>
                    </form>
                    <?php else: ?>

                    <div class="login-required">
                        <p>You must be logged in to place an order.</p>
                        <button class="btn" onclick="window.location.href='login.php'">Login</button>
                    </div>
                    <?php endif; ?>


                </div>
            </div>
        </section>
        <div class="cart-container" id="cartContainer">
            <h2>Order Details</h2>
            <div id="checkoutCartContent"></div>
            <div id="checkoutCartTotal"></div>
        </div>

    </div>

    <footer>
        <div class="innerItem">
            <h2>©<span style="color: #bb7b05">Pizza</span><span style="color: #ad2525">lia</span> 2023</h2>
            <div class="company-address">
                83 Pizza Street 111883 #01-22 <br>
                See On Google Maps <br>
                Opening Hours 9 A.M -9 P.M
            </div>
        </div>
    </footer>

    <script src="checkout.js"></script>
</body>

</html>