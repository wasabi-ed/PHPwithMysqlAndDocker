<?php
$servername = "mysql";  // Use the MySQL container name
$username = "user";
$password = "password";
$database = "school_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
