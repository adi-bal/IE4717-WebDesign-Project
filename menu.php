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
    <link rel="stylesheet" href="style-menu.css">
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
                    <h2>All-time Favourites</h2>
                </div>
                <div class="food-row-one">

                    <div class="food-image">
                        <img src="HawaiianS.png" alt="">
                        <div class="inner-text">
                            <h2>Special Hawaiian</h2>
                            <p>Loaded with Mozzarella Cheese with Succulent Smoked Chicken Breast, Chicken Ham and Juicy
                                Pineapples. S-$7, M-$16, L-$30</p>
                            <div class="price-section">
                                <div>
                                    <label for="size">Size:</label>
                                    <select id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="1" min="1">
                                </div>
                                <a href="menu.php" class="btn" onclick="addToCart(this)"
                                    data-pizza-name="Special Hawaiian">Add</a>
                            </div>
                        </div>
                    </div>


                    <div class="food-image">
                        <img src="Ham.png" alt="">
                        <div class="inner-text">
                            <h2>Ultimate Ham</h2>
                            <p>Tons of fresh ham, succulent mushrooms, amazing cheese and fresh tomatoes. S-$6.80,
                                M-$16, L-$31</p>
                            <div class="price-section">
                                <div>
                                    <label for="size">Size:</label>
                                    <select id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="1" min="1">
                                </div>
                                <a href="menu.php" class="btn" onclick="addToCart(this)"
                                    data-pizza-name="Ultimate Ham">Add</a>
                            </div>
                        </div>
                    </div>


                    <div class="food-image">
                        <img src="Pepperoni.png" alt="">
                        <div class="inner-text">
                            <h2>Classic Pepperoni</h2>
                            <p>The all time classic loaded with Mozzarella Cheese and enormous portions of Beef
                                Pepperoni.
                                S-$6, M-$12.50, L-$24</p>
                            <div class="price-section">
                                <div>
                                    <label for="size">Size:</label>
                                    <select id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="1" min="1">
                                </div>
                                <a href="menu.php" class="btn" onclick="addToCart(this)"
                                    data-pizza-name="Classic Pepperoni">Add</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="food-category">
                    <h2>Originals</h2>
                </div>
                <div class="food-row-two">
                    <div class="food-image">
                        <img src="Hawaiian.png" alt="">
                        <div class="inner-text">
                            <h2>Hawaiian</h2>
                            <p>100% Mozarella Cheese, pineapples and chicken ham. Pizzalia Classic. S-$5, M-$11, L-$22
                            </p>
                            <div class="price-section">
                                <div>
                                    <label for="size">Size:</label>
                                    <select id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="1" min="1">
                                </div>
                                <a href="menu.php" class="btn" onclick="addToCart(this)"
                                    data-pizza-name="Hawaiian">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="food-image">
                        <img src="Tomato.png" alt="">
                        <div class="inner-text">
                            <h2>Tomato Cheesy</h2>
                            <p>Made with the freshest hand picked tomatos topped with top quality tomato sauce and
                                cheese.
                                S-$5.60, M-$11, L-$20</p>
                            <div class="price-section">
                                <div>
                                    <label for="size">Size:</label>
                                    <select id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="1" min="1">
                                </div>
                                <a href="menu.php" class="btn" onclick="addToCart(this)"
                                    data-pizza-name="Tomato Cheesy">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="food-image">
                        <img src="BarbequeC.png" alt="">
                        <div class="inner-text">
                            <h2>Barbeque Chic</h2>
                            <p>Loaded with Mozzarella Cheese, Succulent Smoked Chicken Breast, Onion, Green Pepper and
                                BBQ
                                Sauce. S-$5.50, M-$13, L-$24</p>
                            <div class="price-section">
                                <div>
                                    <label for="size">Size:</label>
                                    <select id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="1" min="1">
                                </div>
                                <a href="menu.php" class="btn" onclick="addToCart(this)"
                                    data-pizza-name="Barbeque Chic">Add</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="food-category">
                    <h2>Must-try!</h2>
                </div>
                <div class="food-row-three">
                    <div class="food-image">
                        <img src="Veggie.png" alt="">
                        <div class="inner-text">
                            <h2>Veggie Overload</h2>
                            <p>Made with the freshest vegetables. Topped with olives and mushrooms. S-$5.70, M-$12,
                                L-$22</p>
                            <div class="price-section">
                                <div>
                                    <label for="size">Size:</label>
                                    <select id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="1" min="1">
                                </div>
                                <a href="menu.php" class="btn" onclick="addToCart(this)"
                                    data-pizza-name="Veggie Overload">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="food-image">
                        <img src="Cheesy.png" alt="">
                        <div class="inner-text">
                            <h2>Cheesy Heaven</h2>
                            <p>Tons of Mozzarella Cheese, Oregano and Parmesan Cheese. Never enough cheese! S-$4.50,
                                M-$10, L-$20</p>
                            <div class="price-section">
                                <div>
                                    <label for="size">Size:</label>
                                    <select id="size">
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="1" min="1">
                                </div>
                                <a href="menu.php" class="btn" onclick="addToCart(this)"
                                    data-pizza-name="Cheesy Heaven">Add</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </section>
        <div class="cart-container" id="cartContainer">
            <h2>Your Cart</h2>
            <div class="cart-boxes" id="cartContent">
                <!-- Cart items will be displayed here -->
            </div>
            <p><b> Total: </b><span id="cartTotal">0.00</span></p>
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

    <script src="cart.js"></script>
</body>

</html>