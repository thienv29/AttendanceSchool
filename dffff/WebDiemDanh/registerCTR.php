<?php
    include('config.php');
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Email = $_POST['email'];
    $idschool=$_POST['idschool'];
    $Pass = $_POST['pass'];
    $sql = "SELECT * FROM `tbl_teacher` WHERE email_teacher='$Email'";
    $sqlIdschool = "SELECT * FROM `schools` WHERE id='$idschool'";
    $old = mysqli_query($conn,$sql);
    $oldIdsch = mysqli_query($conn,$sqlIdschool);
    if(mysqli_num_rows($oldIdsch)<= 0){
        header('location:login.php?errId=true');
    }
    else if(mysqli_num_rows($old)>0 ){
        header('location:login.php?checkEmail=true');
    } else{
        $Pass=md5($Pass);
        $sql="INSERT INTO `tbl_teacher`(`fisrtName`, `password`, `lastName`, `email_teacher`,`id_school`) VALUES ('$Lname','$Pass','$Fname','$Email',$idschool)";
        mysqli_query($conn,$sql);
        header('location:index.php');
    }
?>