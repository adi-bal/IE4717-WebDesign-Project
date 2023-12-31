<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "f34ee";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the feedback data from the form
    $dateOfExperience = $_POST['dateOfExperience'];
    $experience = $_POST['experience'];

    // Prepare and execute the SQL query to insert feedback into the database
    $sql = "INSERT INTO feedback (dateOfExperience, experience) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $dateOfExperience, $experience);

    if ($stmt->execute()) {
        // Feedback successfully inserted
        header("Location: index.php"); // Redirect to a success page
        exit();
    } else {
        // Error occurred while inserting feedback
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
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
                    <h2>FEEDBACK
                        FORM</h2><br>
                    <p>We welcome your feedback on Pizzalia, including your thoughts on our products and service,
                        whether they are positive or negative. If you've encountered any issues with our service, or if
                        you've had a great experience, we value your input. Please take a moment to complete our online
                        feedback form below.</p>
                    <br>
                    <h1><u>YOUR EXPERIENCE</u></h1>
                    <br>
                    <p> We would love to hear from you!</p>
                    <br><br>
                    <div style="text-align: left;">
                        <form method="post"
                            action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <label for="dateOfExperience">Date of Experience:</label>
                            <input type="date" id="dateOfExperience" name="dateOfExperience" required
                                max="<?php echo date('Y-m-d'); ?>">
                            <!-- max attribute to limit future dates -->
                            <br><br>

                            <label for="experience">Experience:</label>
                            <textarea id="experience" name="experience" rows="4" cols="50" required
                                maxlength="1000"></textarea> <!-- maxlength attribute to limit character count -->
                            <br><br>

                            <button class="btn" type="submit" id="submitForm">Send</button><br><br>
                            <button class="btn" style="background-color:red" type="reset" id="clearForm">Clear All</button>
                        </form>
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


</body>

</html>