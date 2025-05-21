<?php
$servername = "localhost";
$username = "pceabara_root";  // Use your MySQL username
$password = "derek432$A"; // Use your MySQL password
$database = "pceabara_pcea";  // Use your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
