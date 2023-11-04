<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start the session
session_start();

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

// Get user input from form and session
$fullname = $_SESSION['fullname']; // Get the full name from the session variable.
$email = $_SESSION['email']; // Get the email from the session variable.
$mobile = $_POST['mobile']; // Get the mobile number from posted form data.
$address = $_POST['address']; // Get the address from posted form data.
$delivery_time = $_POST['delivery_time']; // Get the delivery time from posted form data.
$cart_content = $_POST['cartContent']; // Get the cart content from posted form data.
$cart_total = floatval($_POST['cartTotal']); // Convert cart total to a float value.

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO Orders (fullname, email, mobile, address, delivery_time, cart_content, cart_total) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssd", $fullname, $email, $mobile, $address, $delivery_time, $cart_content, $cart_total);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "New order placed successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>



