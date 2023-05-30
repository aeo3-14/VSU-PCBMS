<?php
session_start();
include_once('connection.php');

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['username']) && empty($_POST['password'])) {
        echo "<script>alert('Please Fill Username and Password');</script>";
        exit;
    } elseif (empty($_POST['password'])) {
        echo "<script>alert('Please Fill Password');</script>";
        exit;
    } elseif (empty($_POST['username'])) {
        echo "<script>alert('Please Fill Username);</script>";
        exit;
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $role=$row['role'];
            $username = $row['username'];
            $password = $row['password'];



            if ($username == $username && $password == $password) {
                $_SESSION['logged_in'] = true;
                $_SESSION['role']=$role;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                if($_SESSION['role']=="manager"){
                    header('location:../View/managerDashboard.php');
                }
                elseif($_SESSION['role']=="cashier"){
                    header('location:../View/cashierDashboard.php');
                }
                elseif($_SESSION['role']=="personnel"){
                    header('location:../View/personnelDashboard.php');
                } 
            }
        } else {
            echo "<script>alert('Invalid Username or Password');window.location.href='../View/index.php'</script>";
             
            exit;
        }
    }

}
?>
