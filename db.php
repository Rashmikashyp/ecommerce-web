<?php



// Database credentials
$host = 'localhost'; // Replace with your host
$dbname = 'ecommerce_website'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

// Create a connection

$conn =  mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>