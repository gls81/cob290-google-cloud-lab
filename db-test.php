<?php
echo "COB290 Lab Test Database Connection\n";

$servername = "localhost";
$username = "lab";
$password = "password123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>