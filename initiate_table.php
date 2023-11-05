<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "f34ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table for user registration
$sqlUsers = "CREATE TABLE IF NOT EXISTS Users(
    user_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL, 
    email VARCHAR(50) NOT NULL UNIQUE, 
    password VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sqlUsers)) {
    echo "Users table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// sql to create table for order details
$sqlOrders = "CREATE TABLE IF NOT EXISTS Orders (
    order_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    delivery_time TIME NOT NULL,
    cart_content TEXT,
    cart_total DECIMAL(10, 2) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sqlOrders)) {
    echo "Orders table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// sql to create table for feedback
$sqlFeedback = "CREATE TABLE IF NOT EXISTS Feedback (
    feedback_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    dateOfExperience DATE NOT NULL,
    experience TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sqlFeedback)) {
    echo "Feedback table created successfully<br>";
} else {
    echo "Error creating Feedback table: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>

