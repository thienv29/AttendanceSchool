<?php
include('config.php');

if (isset($_SESSION['idSchool'])) {
    $user = $_SESSION['idSchool'];
    $sql = "SELECT * FROM `schools` WHERE id='$user'";
    $old = mysqli_query($conn, $sql);
    $result = mysqli_fetch_row($old);
    $FullName = $result[0];
}elseif (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
$sql = "SELECT * FROM `tbl_teacher` WHERE email_teacher='$user'";
$old = mysqli_query($conn, $sql);
$result = mysqli_fetch_row($old);
$FullName = $result[3] . " " . $result[1];
    
}elseif (isset($_SESSION['id'])) {
    $user = $_SESSION['id'];
    $sql = "SELECT * FROM `tbl_student` WHERE id_student ='$user'";
    $old = mysqli_query($conn, $sql);
    $result = mysqli_fetch_row($old);
    $FullName = $result[3] . " " . $result[0];
}
?>
