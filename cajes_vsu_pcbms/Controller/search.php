<?php
include_once('connection.php');  
$searchTerm = isset($_GET['searchTerm']) ? $_GET['searchTerm'] : '';

// Prepare the SQL statement
// Build the SQL query based on the search criteria
if (!empty($searchTerm)) {
    $sql = "SELECT * FROM supplier WHERE company LIKE '%$searchTerm%' OR contact_person LIKE '%$searchTerm%' OR address LIKE '%$searchTerm%' OR sex LIKE '%$searchTerm%' OR phone LIKE '%$searchTerm%'";
} else {
    $sql = "SELECT * FROM supplier";
}

// Execute the query
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Company, Contact Person</th>";
    echo "</tr>";                    
                                    
    while ($row = mysqli_fetch_assoc($result)) {    
        
        echo "<tr>";
        echo "<td><a href='editSupplier.php?supp_id=".$row['supp_id']."'>".$row['company'].", ".$row['contact_person']."</a></td>";
        echo "</tr>";
    }

     
} else {
        echo "<tr>";
        echo "<td>No results found.</td>";
        echo "</tr>";
}
// Close the database connection

?>
