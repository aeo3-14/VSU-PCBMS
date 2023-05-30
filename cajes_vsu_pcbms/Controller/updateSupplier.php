<?php
  include_once('connection.php'); 

  if (isset($_POST['supp_id'], $_POST['company'], $_POST['contact_person'], $_POST['sex'], $_POST['phone'], $_POST['address'])) {
    $supp_id = $_POST['supp_id'];
    $company = $_POST['company'];
    $contact_person = $_POST['contact_person'];
    $sex = $_POST['sex'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Update the supplier data in the database
    $query = "UPDATE supplier SET company = '$company', contact_person = '$contact_person', sex = '$sex', phone = '$phone', address = '$address' WHERE supp_id = $supp_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Supplier data updated successfully.";
        header('location:../View/supplierInfo.php');
    } else {
        echo "Error updating supplier data: " . mysqli_error($conn);
    }
} else {
    echo "Missing required fields.";
}
?>