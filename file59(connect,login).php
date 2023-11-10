<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create a MySQLi connection
$conn = @new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
//echo 'your are connected';
}

// Now you can use $conn for database operations.

?>