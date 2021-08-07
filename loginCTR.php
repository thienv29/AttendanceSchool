<?php
session_start();

    include('config.php');
    $Email = $_POST['email'];
    $Pass = $_POST['pass'];
    $Pass=$Pass;
    $Permiss = $_POST['selectPermiss'];
    if($Permiss=="School"){
        $sql="SELECT * FROM `schools` WHERE email='$Email' AND pass='$Pass'";
        $old = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($old)>0){
        $row = $old->fetch_assoc();
        $_SESSION['emailSchool'] = $Email;
        $_SESSION['idSchool'] = $row['id'];
        header('location:index.php');
    } else{
        $passErr = "Password or Username is wrong!";
        header("location:login.php?passErr=$passErr");
    }
    }elseif ($Permiss=="Teacher") {
        $sql = "SELECT * FROM `tbl_teacher` WHERE email_teacher='$Email' AND password ='$Pass'" ;
        $old = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($old)>0){
        $row = $old->fetch_assoc();
        $_SESSION['user'] = $Email;
        $_SESSION['idteacher'] = $row['id_giaovien'];
        header('location:index.php');
    } else{
        $passErr = "Password or Username is wrong!";
        header("location:login.php?passErr=$passErr");
    }}elseif ($Permiss=="Student") {
        $sql="SELECT * FROM `tbl_student` WHERE id='$Email' AND pass='$Pass'";
        $old = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($old)>0){
        $row = $old->fetch_assoc();
        $_SESSION['idStudent'] = $Email;
        $_SESSION['id'] = $row['id_student'];
        header('location:index.php');
    } else{
        $passErr = "Password or Username is wrong!";
        header("location:login.php?passErr=$passErr");
    }
    }
    
 
    
?>