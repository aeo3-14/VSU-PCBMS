<?php
// Database connection parameters
$host = "localhost";
$user = 'root';
$password =  '';
$database = "cajes_pcbms_db";

// Connect to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check for connection errors
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>