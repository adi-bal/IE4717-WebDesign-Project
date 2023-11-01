<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzalia</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header">
        <a class="Logo">Pizza<span>lia</span></a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="contact.php">Contact</a>
            <a href="feedback.php">Feedback</a>
        </nav>

        <button class="btn">Login</button>
    </header>
    <section class="home-section">
        <div class="text-content">
            <h5>Order your Special Pizza!</h5>
            <div class="pizza-info">
                <h2>Hawaiian Pizza</h2>
                <p>One of the best pizza by Pizzalia! Definitely a Must-try!</p>
                <button class="btn" id="orderButton">Order Now</button>
                <button class="btn btn-explore" id="contactButton">Contact Us</button>
            </div>
        </div>

        <div class="image-section">
            <img src="Pizza.png" alt="">
            <div class="shadow"></div>
        </div>

    </section>

    <section class="Dishes-section">
        <div class="Dishes-title">
            <h2 class="heading">Find your <span style="color: #bb7b05">Pizza</span><span
                    style="color: #ad2525">lia</span></h2>
        </div>

        <div class="dishGallery">
            <div class="food-row-one">
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

    <script>
        // Get references to the buttons
        const orderButton = document.getElementById('orderButton');
        const contactButton = document.getElementById('contactButton');

        // Add event listeners for button clicks
        orderButton.addEventListener('click', () => {
            window.location.href = 'menu.php'; // Redirect to order.php
        });

        contactButton.addEventListener('click', () => {
            window.location.href = 'contact.php'; // Redirect to contact.php
        });
    </script>

</body>

</html>