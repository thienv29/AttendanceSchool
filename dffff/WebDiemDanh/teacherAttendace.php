<?php

    include("config.php");
    $idclass = $_GET['idclass'];
    $sql = "SELECT * FROM `tbl_group_student` WHERE id_class = '$idclass'";
    $old = mysqli_query($conn,$sql);
    if (mysqli_num_rows($old)) {
        while($row = $old->fetch_assoc()){
            $string = $row['stringAtten'];
            $idstudent = $row['id_student'];
            $string = $string."v";
            $sqls = "UPDATE `tbl_group_student` SET `stringAtten`='$string' WHERE `id_student`='$idstudent' and `id_class`='$idclass'";
            mysqli_query($conn,$sqls);
        }
    }

     
?>