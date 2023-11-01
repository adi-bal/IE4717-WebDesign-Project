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
        <div class="activity-section" id="cartIcon">
            <i class='bx bx-cart'></i>
        </div>

        <button class="btn">Login</button>
    </header>

    <div class="main-container">
        <section class="Dishes-section">

            <div class="dishGallery">
                <div class="food-category">
                    <h2>Originals</h2>
                </div>
                <div class="food-row-one">

                    <div class="food-image">
                        <img src="ChickenS.png" alt="">
                        <div class="inner-text">
                            <h2>Chicken Supreme</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequuntur illo, nulla
                                suscipit perspiciatis veniam!</p>
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
                                    data-pizza-name="Chicken Supreme">Add</a>
                            </div>
                        </div>
                    </div>


                    <div class="food-image">
                        <img src="ChickenS.png" alt="">
                        <div class="inner-text">
                            <h2>Margherita</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequuntur illo, nulla
                                suscipit perspiciatis veniam!</p>
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
                                    data-pizza-name="Margherita">Add</a>
                            </div>
                        </div>
                    </div>


                    <div class="food-image">
                        <img src="ChickenS.png" alt="">
                        <div class="inner-text">
                            <h2>Chicken Supreme</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequuntur illo, nulla
                                suscipit
                                perspiciatis veniam!</p>
                            <div class="price-section">
                                <span>$5.50</span>
                                <a href="menu.php" class="btn">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="food-category">
                    <h2>Classics</h2>
                </div>
                <div class="food-row-two">
                    <div class="food-image">
                        <img src="ChickenS.png" alt="">
                        <div class="inner-text">
                            <h2>Chicken Supreme</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequuntur illo, nulla
                                suscipit
                                perspiciatis veniam!</p>
                            <div class="price-section">
                                <span>$5.50</span>
                                <a href="menu.php" class="btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="food-image">
                        <img src="ChickenS.png" alt="">
                        <div class="inner-text">
                            <h2>Chicken Supreme</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequuntur illo, nulla
                                suscipit
                                perspiciatis veniam!</p>
                            <div class="price-section">
                                <span>$5.50</span>
                                <a href="menu.php" class="btn">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="food-image">
                        <img src="ChickenS.png" alt="">
                        <div class="inner-text">
                            <h2>Chicken Supreme</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consequuntur illo, nulla
                                suscipit
                                perspiciatis veniam!</p>
                            <div class="price-section">
                                <span>$5.50</span>
                                <a href="menu.php" class="btn">Buy Now</a>
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
            <p>Total: <span id="cartTotal">0.00</span></p>
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