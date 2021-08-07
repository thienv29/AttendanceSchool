<?php
include('config.php');
    $idstudent = $_GET['idstudent'];
    $idclass = $_GET['idclass'];
    $sql = "SELECT tbl_group_student.stringAtten,tbl_group_student.id_student,tbl_group_student.id_class,tbl_student.id,qrcode.stringrandom FROM `tbl_group_student`,tbl_student,qrcode WHERE tbl_group_student.id_student=tbl_student.id_student and tbl_group_student.id_class=qrcode.id_class AND qrcode.stringrandom='$idclass' and tbl_student.id='$idstudent'";
    $old = mysqli_query($conn,$sql);
    if(mysqli_num_rows($old)>0) {
        $row = $old->fetch_assoc();
        $str= $row['stringAtten'];
        $str = substr($str, 0, -1);
        $str=$str."x";
        $idclassNum = $row['id_class'];
        $idstudentNum = $row['id_student'];
        $sqlud = "UPDATE `tbl_group_student` SET `stringAtten`='$str' WHERE id_student='$idstudentNum' and id_class = '$idclassNum'";
        mysqli_query($conn,$sqlud);

    }
    else{
        header('location:student.php?err="ID or ID class is wrong!"&id='.$idclass );
    }

?>