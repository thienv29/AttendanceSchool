<?php
session_start();

if (!isset($_SESSION['idSchool'])) {
} else {
    $listClassName = "";
    $listClassInfo = "";
    include('config.php');
    $idstudent  = $_GET['idstudent'];
    $idschool = $_SESSION['idSchool'];
    $sql = "SELECT tbl_class.subject,timeStart,timeOver,tbl_class.id_school,tbl_teacher.lastName,tbl_teacher.fisrtName,tbl_teacher.id_giaovien,tbl_group_student.stringAtten,dayOfWeek FROM `tbl_class`,tbl_group_student,tbl_teacher,tbl_student WHERE tbl_class.id_class=tbl_group_student.id_class and tbl_class.id_teacher= tbl_teacher.id_giaovien and tbl_student.id_student=tbl_group_student.id_student and tbl_student.id='$idstudent' and tbl_class.id_school='$idschool'";
    $old = mysqli_query($conn, $sql);
    if (mysqli_num_rows($old) > 0) {
        while ($row = $old->fetch_assoc()) {
            $row['timeStart'] = substr($row['timeStart'], 0, 5);
            $row['timeOver'] = substr($row['timeOver'], 0, 5);
            $numLess = strlen($row['stringAtten']);
            $numDiligence = substr_count($row['stringAtten'], 'x');
            $numAbsence = substr_count($row['stringAtten'], 'v');
            $listClassName .= '<div class="listClass-item" nameTeacher="' . $row['fisrtName'] . ' ' . $row['lastName'] . '" time="' . $row['dayOfWeek'] . ' ( ' . $row['timeStart'] . ' - ' . $row['timeOver'] . ' )' . '" numOfLess="' . $numLess . '" numDiligence="' . $numDiligence . '" numAbsence="' . $numAbsence . '">
            <div class="listClass-item-name">' . $row['subject'] . '</div>
        </div>';
        }
    }
    echo $listClassName;
}
