<?php
// Start PHP session at the beginning 
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

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture data from form
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm-password']);

    // Check if passwords match
    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match.";
        header("Location: register.php"); // Redirect to registration page
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO Users (fullname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);
    
    // Check if the email already exists
    $duplicate = $conn->prepare("SELECT email FROM Users WHERE email=?");
    $duplicate->bind_param("s", $email);
    $duplicate->execute();
    $duplicate->store_result();
    if ($duplicate->num_rows > 0) {
        $_SESSION['error'] = "Email already registered.";
        header("Location: register.php");
        exit();
    }

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Registration success
        $_SESSION['success'] = "Registration successful. You can now login.";
        header("Location: login.php");
    } else {
        // Registration failed
        $_SESSION['error'] = "User could not be registered. Error: " . $stmt->error;
        header("Location: register.php");
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Redirect to the registration page if the request method is not POST
    header("Location: register.php");
}
?>
