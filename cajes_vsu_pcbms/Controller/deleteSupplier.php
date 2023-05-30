
<?php
include_once('connection.php');
// Check if the supplier ID is provided
if (isset($_POST['supp_id'])) {
    $supp_id = $_POST['supp_id'];

    // Delete the supplier from the database
    $query = "DELETE FROM supplier WHERE supp_id = $supp_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Supplier deleted successfully.";
        header('location:../View/supplierInfo.php');

    } else {
        echo "Error deleting supplier: " . mysqli_error($conn);
    }
} else {
    echo "Supplier ID not specified.";
}
 $conn->close();
?>