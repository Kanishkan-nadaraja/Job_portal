<?php
// Database connection settings
$host = 'localhost'; // Database host
$user = 'root'; // Database username
$password = 'abc123'; // Database password
$database = 'tutorial'; // Database name

// Create connection
$con = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>