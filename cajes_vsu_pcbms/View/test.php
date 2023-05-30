<?php
  
include_once('../Controller/connection.php');

// Check if the supplier ID is provided
if (isset($_GET['supp_id'])) {
    $supp_id = $_GET['supp_id'];

    // Fetch data of the selected supplier
    $query = "SELECT * FROM supplier WHERE supp_id = $supp_id";
    $result = mysqli_query($conn, $query);

    // Check if the supplier exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>
</head>
<body>
    <h2>Edit Supplier</h2>
    <form action="updateSupplier.php" method="POST">
        <input type="hidden" name="supp_id" value="<?php echo $row['supp_id']; ?>">
        <label>Company:
            <input type="text" name="company" value="<?php echo $row['company']; ?>" required>
        </label>
        <label>Contact Person:
            <input type="text" name="contact_person" value="<?php echo $row['contact_person']; ?>" required>
        </label>
        <label>Sex:
            <select name="sex" required>
                <option value="Male" <?php if ($row['sex'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if ($row['sex'] == 'Female') echo 'selected'; ?>>Female</option>
            </select>
        </label>
        <label>Phone:
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>
        </label>
        <label>Address:
            <input type="text" name="address" value="<?php echo $row['address']; ?>" required>
        </label>
        <input type="submit" value="Save">
    </form>
</body>
</html>

<?php
    } else {
        echo "Supplier not found.";
    }
} else {
    echo "Supplier ID not specified.";
}

// Close the database connection
mysqli_close($conn);
?>
