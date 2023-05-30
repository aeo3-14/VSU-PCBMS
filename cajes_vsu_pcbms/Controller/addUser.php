<?php
include_once('connection.php'); 

// Get the form data
$empid = mysqli_real_escape_string($conn, $_POST['empid']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, md5($_POST['password']));
$role = mysqli_real_escape_string($conn, $_POST['role']);

// Generate a unique user ID
// Note: This assumes that the user ID is an auto-incremented field in the database
$userid = NULL;

// Prepare the SQL query to insert a new user into the database
$sql = "INSERT INTO users (userid, empid, username, password, role)
		VALUES ('$userid', '$empid', '$username', '$password', '$role')";

// Execute the SQL query
if (mysqli_query($conn, $sql)) {
	echo "<script>alert('A new user is added , redirecting to log in page');window.location.href='../View/index.php'</script>";
    
} else {
	echo "<script>alert('Error Adding User');window.location.href='../View/register.php'</script>". mysqli_error($conn);
}
?>
// Close the database connection
 
 