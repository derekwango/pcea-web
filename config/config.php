<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pcea";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
