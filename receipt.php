<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

// Check if the ID is set in the session
if (!isset($_SESSION['id'])) {
    // Handle the case where the session ID isn't set
    // For example, redirect to a different page or show an error message
    exit('Error: Order ID not found in session.');
}

// Database credentials
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

// Assuming you have the order's ID in session as 'id'
$order_id = $_SESSION['id'];

// Prepare a select statement
$sql = "SELECT fullname, email, mobile, address, delivery_time FROM Orders WHERE order_id = ?";

if ($stmt = $conn->prepare($sql)) {
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("i", $order_id);

    // Attempt to execute the prepared statement
    if ($stmt->execute()) {
        // Bind result variables
        $stmt->bind_result($fullname, $email, $mobile, $address, $delivery_time);

        // Fetch the results
        if ($stmt->fetch()) {
            // Now $fullname, $email, $mobile, $address, and $delivery_time are populated
        } else {
            // No order found with the given ID
            exit('Error: No order found with the provided ID.');
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    $stmt->close();
} else {
    // Handle the case where the statement couldn't be prepared
    exit('Error: SQL statement could not be prepared.');
}

// Close connection
$conn->close();
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
        <button class="btn">Login</button>
    </header>

    <div class="main-container">
        <section class="Dishes-section">

            <div class="dishGallery">
                <div class="food-category">
                    <h2>Receipt</h2>
                    <p>
                        We Hope that you enjoy your meal! You will shortly receive an email detailing the contents of your order. <br>

                        In the mean time do leave us a feedback by filling out <a href="feedback"> this form</a>, or if you have any enquires
                        please do not hesistate to <a href="contact.html">contact</a> us.
                    </p>

                    <h3>Your Details</h3>
                    <p>
                        Name: <?php echo htmlspecialchars($fullname); ?><br>
                        Contact No: <?php echo htmlspecialchars($mobile); ?><br>
                        Email Address: <?php echo htmlspecialchars($email); ?><br>
                        Address: <?php echo htmlspecialchars($address); ?><br>
                        Delivery Time: <?php echo htmlspecialchars($delivery_time); ?>
                    </p>

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