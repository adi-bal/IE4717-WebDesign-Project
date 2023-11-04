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
    <link rel="stylesheet" href="style-feedback.css">
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
                    <h2>FEEDBACK
                        FORM</h2><br>
                    <p>We welcome your feedback on Pizzalia, including your thoughts on our products and service,
                        whether they are positive or negative. If you've encountered any issues with our service, or if
                        you've had a great experience, we value your input. Please take a moment to complete our online
                        feedback form below.</p>
                    <br>
                    <h1><i>YOUR EXPERIENCE</i></h1>
                    <hr>
                    <p> We would love to hear from you!</p>
                    <br><br>
                    <div style="text-align: left;">
                        <label for="dateOfExperience">Date of Experience:</label>
                        <input type="date" id="dateOfExperience" name="dateOfExperience" required
                            max="<?php echo date('Y-m-d'); ?>">
                        <!-- max attribute to limit future dates -->
                        <br><br>

                        <label for="experience">Experience:</label>
                        <textarea id="experience" name="experience" rows="4" cols="50" required
                            maxlength="1000"></textarea> <!-- maxlength attribute to limit character count -->
                        <br><br>

                        <button type="button" id="submitForm">Send</button><br><br>
                        <button type="button" id="clearForm">Clear All</button>
                    </div>


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

    <script src="feedback.js"></script>
</body>

</html>