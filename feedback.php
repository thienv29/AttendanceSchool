<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('location:login.php');
    }
    include('config.php');
    $Email = $_POST['email'];
    $Name = $_POST['name'];
    $Message = $_POST['message'];
    $sql = "INSERT INTO `feedback`(`Email`, `Name`, `Message`) VALUES ('$Email','$Name','$Message')";
    mysqli_query($conn,$sql);
    header('location:index.php');
?>