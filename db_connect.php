<?php
$servername = "localhost";
$username = "root";
$password = "";  // Update with your MySQL password if needed
$dbname = "carnisa";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
