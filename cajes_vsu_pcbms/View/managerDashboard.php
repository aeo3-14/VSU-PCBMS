<?php
session_start();
include_once('../Controller/connection.php');

if(!($_SESSION['role']=="manager")){
  echo "<script>alert('You are browsing invalid page')</script>";
  header('location:../View/index.php');
  exit();
}
 
 
$_SESSION['username'];
$_SESSION['role'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
 
    <link rel="icon" href="../Resources/img/vsu.png"/>
</head>

<body>
 



<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand p-2" href="#" style="color:white"> <img src="../Resources/img/store1.png" class="img-fluid" alt="Sample image" height="25px" width="25px">STORE MANAGEMENT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active p-2"style="color:white" aria-current="page" href="Managerdashboard.php"> <img src="../Resources/img/home2.png" class="img-fluid" alt="Sample image" height="20px" width="25px">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-2" style="color:white"href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../Resources/img/delivery1.png" class="img-fluid" alt="Sample image" height="25px" width="25px">  Receive Delivery
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="supplierInfo.php">Supplier Update</a></li>
            <li><a class="dropdown-item" href="#">Product Update</a></li>
            <li><a class="dropdown-item" href="#">Product Delivery</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-2 "style="color:white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="../Resources/img/order.png" class="img-fluid" alt="Sample image" height="25px" width="25px"> Order Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Purchase Order Manage</a></li>
            <li><a class="dropdown-item" href="#">Expired Products Manage</a></li>
          </ul>
        </li>
      </ul>
      <li class="d-flex">
      <h7 class="p-2 text-white" ><?=$_SESSION['username'];?></h7>
      <h7 class="p-2 text-white" ><?=$_SESSION['role'];?></h7>
       
      <a href="../Controller/logout.php" class="nav-link bg-success p-2 text-white"><?php mysqli_close($conn); ?><u>log out</u></a>
       
    </div>
  </div>
</nav>

 




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
 
</body>

</html>