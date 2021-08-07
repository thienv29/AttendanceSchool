<?php
include('config.php');
    $idclass = $_GET['idclass'];
    $name = $_GET['name'];
    $message = $_GET['message'];
    $time = $_GET['time'];
    $distin = $_GET['distin'];
    $distinv2 = $_GET['distinv2'];
    $sql= "INSERT INTO `chat`(`name`, `id_class`, `stringChat`, `time`, `distin`, `distinv2`) 
    VALUES ('$name','$idclass','$message','$time','$distin','$distinv2')";
    mysqli_query($conn,$sql);

?>