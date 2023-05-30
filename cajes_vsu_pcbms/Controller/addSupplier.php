<?php
include_once('connection.php'); 

// Get the form data
$company = mysqli_real_escape_string($conn, $_POST['company']);
$contactPerson = mysqli_real_escape_string($conn, $_POST['contact_person']);
$sex = mysqli_real_escape_string($conn, ($_POST['sex']));
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = mysqli_real_escape_string($conn, $_POST['address']);

// Generate a unique user ID
// Note: This assumes that the user ID is an auto-incremented field in the database
$userid = NULL;

// Prepare the SQL query to insert a new user into the database
$sql = "INSERT INTO supplier (company, contact_person, sex, phone, address)
		VALUES ('$company', '$contactPerson', '$sex', '$phone', '$address')";

// Execute the SQL query
if (mysqli_query($conn, $sql)) {
	echo "<script>alert('A new user is added');</script>";
    header('location:../View/supplierInfo.php');
} else {
	echo "<script>alert('Error Adding User');</script>". mysqli_error($conn);
}
?>
// Close the database connection
 
 