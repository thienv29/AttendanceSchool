<?php
    session_start();
    if (!isset($_SESSION['idSchool'])) {
        echo "Vui lòng đăng nhập!!";

    }else{
        include('config.php');
        $idSchool = $_SESSION['idSchool'];
        $sql = "SELECT * FROM `tbl_class`,tbl_teacher WHERE tbl_class.id_teacher =tbl_teacher.id_giaovien and tbl_class.id_school='$idSchool'";
        $old = mysqli_query($conn,$sql);
        if (mysqli_num_rows($old)>0) {
            while ($row = $old->fetch_assoc()) {
                echo '<div class="bodyTblClass-student gridrow">
                <div class="bodyTblClass-student-fullname grid-col-2">
                    <span>' . $row['id_class'].'</span>
                </div>
                <div class="bodyTblClass-student-fullname grid-col-2">
                    <span>' . $row['subject'] . '</span>
                </div>
                <div class="bodyTblClass-student-id grid-col-2">
                    <span>' . $row['id_giaovien']. '</span>
                </div>
                <div class="bodyTblClass-student-action grid-col-2">
                    <span>' . $row['dayOfWeek'] . '</span>
                </div>
                <div class="bodyTblClass-student-action grid-col-2">
                    <span>' . $row['timeStart'] . '</span>

                </div>
                <div class="bodyTblClass-student-action grid-col-2">
                    <span>' . $row['timeOver'] . '</span>

                </div>

            </div>';
            }
        }
    }
?>