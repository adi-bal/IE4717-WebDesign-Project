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
    <link rel="stylesheet" href="style-contact.css">
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
        <!-- Check if the user is logged in -->
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <!-- Display user's full name and logout button -->
            <div class="user-info">
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['fullname']); ?>!</span>
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
                    <h2>CONTACT US!</h2><br>
                    <p>Here at Pizzalia, we always appreciate your feedback to improve our products and services. If you
                        are experiencing any problems or have questions, suggestions or other comments about our
                        products and services, kindly contact us. If you think we did a great job we'd also love to hear
                        from you.</p>
                    <br>
                    <br>
                    <h2>Ways to contact us:</h2><BR>
                    <h3>1. CALL US</h3><br>
                    <P>Do give us a call at <b>+65 6888 8888</b> to speak to a Pizzalia team member</p>
                    <br>
                    <br>
                    <h3>2. EMAIL US</h3><br>
                    
                    <p>Please feel free to send us an email at <a href="mailto:Pizzalia@gmail.com">Pizzalia@gmail.com,</a> and we will make every effort to
                        ensure that your feedback receives a prompt response.</p>
                    <br>
                    <br>
                    <h3>3. MAIL OR VISIT OUR OUTLET</h3><BR>
                    <P>Pizzalia Singapore Pte Ltd</P><br>
                    <p>83 Pizza Street #01-22</p><br>
                    <p>Singapore 111883</p>
                </div>
            </div>

        </section>
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

    <script></script>
</body>

</html>