<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "a_database";

// Create a MySQLi connection
$conn = @new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
}

// Now you can use $conn for database operations.

?>