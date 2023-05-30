<?php
include_once('connection.php'); 

 
mysqli_close($conn);
header("Location: ../View/index.php");
exit();


?>