<?php
    session_start();
    if (!isset($_SESSION['idSchool'])) {
        echo "Vui lòng đăng nhập!!";

    }else{
        include('config.php');
        $idSchool = $_SESSION['idSchool'];
        $sql = "SELECT * FROM `tbl_teacher`,faculty WHERE tbl_teacher.id_faculty = faculty.id and tbl_teacher.id_school='$idSchool'";
        $old = mysqli_query($conn,$sql);
        if (mysqli_num_rows($old)>0) {
            while ($row = $old->fetch_assoc()) {
                echo '<div class="bodyTblClass-student gridrow">
                <div class="bodyTblClass-student-fullname grid-col-2">
                    <span>' . $row['fisrtName'] . ' ' . $row['lastName'] . '</span>
                </div>
                <div class="bodyTblClass-student-id grid-col-2">
                    <span>' . $row['id'] . '</span>
                </div>
                <div class="bodyTblClass-student-action grid-col-2">
                    <span>' . $row['gender'] . '</span>
                </div>
                <div class="bodyTblClass-student-action grid-col-2">
                    <span>' . $row['faculty_name'] . '</span>
                </div>
                <div class="bodyTblClass-student-action grid-col-2">
                    <span>' . $row['email_teacher'] . '</span>

                </div>

            </div>';
            }
        }
    }
?>