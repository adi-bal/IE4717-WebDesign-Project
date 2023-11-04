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

// Get user input from form
$fullname = $_POST['fullname'];
$password = $_POST['password']; // This should be hashed in your database

// Create SQL query to fetch email as well
$sql = "SELECT fullname, password, email FROM Users WHERE fullname = ?";

// Prepare statement
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error in SQL query: " . $conn->error);
}

// Bind parameters and execute statement
$stmt->bind_param("s", $fullname);
$stmt->execute();

// Store the result to get the number of rows
$stmt->store_result();

// Check if any rows are returned
if ($stmt->num_rows > 0) {
    // Bind the result to variables
    $stmt->bind_result($fullnameFromDB, $passwordFromDB, $emailFromDB);
    
    // Fetch the result
    $stmt->fetch();
    
    // Verify the password (assuming you're storing hashed passwords)
    if (password_verify($password, $passwordFromDB)) {
        // Password is correct, so start a new session
        $_SESSION['loggedin'] = true;
        $_SESSION['fullname'] = $fullnameFromDB;
        $_SESSION['email'] = $emailFromDB; // Store the email in session

        // Redirect to user's dashboard or home page
        header("location: index.php");
    } else {
        // Password is not correct
        echo "The password you entered was not valid.";
    }
} else {
    // No user with that fullname
    echo "No account found with that full name.";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>



