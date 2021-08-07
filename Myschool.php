<?php
session_start();
if (!isset($_SESSION['idSchool'])) {
    header('location:login.php');
} else {
    include('getFullName.php');
    $checkLogin = '<li class="unline menuUser">
    <div class="logged-user-coin">'

        . $FullName .

        '</div>
    <i class="logged-icon fas fa-chevron-down">
        <ul class="user-menu">
            <li class="user-option-item">
                <a href="ChangePass.php" class="logout modalChangePass">Change Password</a>

            </li>

            <li class="user-option-item">
                <i class="fas fa-sign-out-alt"></i>
                <a href="logout.php" class="logout">Logout</a>
            </li>
        </ul>
    </i>
</li>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.14.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="icon" href="images/attendance-icon-7.jpg">
</head>

<body>
    <div id="banner"></div>
    <div class="modal ">
        <div class="bgModal"></div>
        <div class="modal-div">
            <div class="modal-main-school-infoStudent-container">
                <div class="modal-main-school-infoStudent">
                    <div class="studentInfo">
                        <div class="studentInfo-item studentInfo-item-left ">
                            <div class="studentInfo-item-ava">
                                <img src="images/student.png" alt="" srcset="">
                            </div>

                        </div>
                        <div class="studentInfo-item studentInfo-item-right">

                            <div class="studentInfo-item-right-name">
                                Full name: Vũ Quý Thiện
                            </div>
                            <div class="studentInfo-item-right-gender">
                                Gender: Nam
                            </div>
                            <div class="studentInfo-item-right-id">
                                ID: 3119560069
                            </div>
                            <div class="studentInfo-item-right-email">
                                Email: thienv29@gmail.com
                            </div>
                        </div>
                        <div class="studentInfo-item studentInfo-item-last ">
                            <div class="countAttendace">
                                <div class="course-percent">
                                    <svg height="100" width="100">
                                        <circle class="course-percent-circle" cx="50" cy="50" r="35" stroke="gray" stroke-width="8" fill="transparent"></circle>
                                        <circle class="course-percent-circle" cx="50" cy="50" r="35" stroke="#a3d5e0" stroke-width="8" fill="transparent" style="stroke-dasharray: 220; stroke-dashoffset: 0;"></circle>

                                    </svg>
                                    <span class="course-percent-text" id="countdown">60%</span>
                                </div>
                                <span>Diligence</span>

                            </div>

                        </div>
                    </div>
                    <div class="listClassAtten">
                        <div class="header-right">
                            <span>Information</span>
                        </div>
                        <div class="listClass">
                            <div class="listClass-header">
                                Subject
                            </div>
                            <div class="listClass-container">
                                <div class="listClass-item active" nameTeacher="" time="" numOfLess="" numDiligence="">
                                    <div class="listClass-item-name" nameTeacher="" time="" numOfLess="" numDiligence="">Toán rời rạc</div>
                                </div>
                                <div class="listClass-item">
                                    <div class="listClass-item-name " nameTeacher="" time="" numOfLess="" numDiligence="">Toán rời rạc</div>
                                </div>
                                <div class="listClass-item">
                                    <div class="listClass-item-name " nameTeacher="" time="" numOfLess="" numDiligence="">Toán rời rạc</div>
                                </div>
                                <div class="listClass-item">
                                    <div class="listClass-item-name " nameTeacher="" time="" numOfLess="" numDiligence="">Toán rời rạc</div>
                                </div>
                            </div>

                        </div>
                        <div class="classInfo">
                            <div class="classInfo-teacher-info">

                                <div class="classInfo-teacher-name classInfo-teacher-info-item">
                                    Teacher: Đinh Thị Thu Hương
                                </div>

                                <div class="classInfo-time classInfo-teacher-info-item">
                                    Time: Satuday ( 08:12 - 09:31 )

                                </div>

                                <div class="classInfo-teacher-info-item classInfo-numLesson">
                                    Num of lessons: <span>60</span>
                                </div>
                                <div class="classInfo-teacher-info-item classInfo-numDiligence">
                                    Diligence: <span>50</span>
                                    <div class="processInfo">

                                    </div>
                                </div>
                                <div class="classInfo-teacher-info-item classInfo-numAbsence">
                                    Absence: <span>10</span>
                                    <div class="processInfo">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="sectionTimeTable-container-main timetableStudent-checkbySchool gridrow " id="timeTableStu">

                </div>
            </div>

            <div class="modal-main-school-addStudent">

            </div>
            <div class="modal-teacher-info">
                <div class="studentInfo">
                    <div class="studentInfo-item studentInfo-item-left ">
                        <div class="studentInfo-item-ava">
                            <img src="images/student.png" alt="" srcset="">
                        </div>

                    </div>
                    <div class="studentInfo-item teacherInfo-item studentInfo-item-right">

                        <div class="studentInfo-item-right-name">
                            Full name: Vũ Quý Thiện
                        </div>
                        <div class="studentInfo-item-right-gender">
                            Gender: Nam
                        </div>
                        <div class="studentInfo-item-right-id">
                            ID: 3119560069
                        </div>
                        <div class="studentInfo-item-right-email">
                            Email: thienv29@gmail.com
                        </div>
                        <div class="studentInfo-item-right-faculty">
                            Faculty: thienv29@gmail.com
                        </div>
                    </div>

                </div>
                <div class="sectionTimeTable-container-main timetableStudent-checkbySchool gridrow " id="timeTableTea">
                    <div class="dayOfWeek">
                        <div class="dayOfWeek-day">Mon</div>
                        <div class="dayOfWeek-day">Tue</div>
                        <div class="dayOfWeek-day">Wed</div>
                        <div class="dayOfWeek-day">Thu</div>
                        <div class="dayOfWeek-day">Fri</div>
                        <div class="dayOfWeek-day">Sat</div>
                        <div class="dayOfWeek-day">Sun</div>
                    </div>
                    <div class="timeClass" start="'.$row1['wokingTimeStart'].'" over="'.$row1['wokingTimeOver'].'">

                        <div class="monday timeClass-day">
                            '.$mon.'
                        </div>
                        <div class="tuesday timeClass-day">
                            '.$tue.'
                        </div>
                        <div class="wednesday timeClass-day">
                            '.$wed.'
                        </div>
                        <div class="thursday timeClass-day">
                            '.$thu.'
                        </div>
                        <div class="friday timeClass-day">
                            '.$fri.'
                        </div>
                        <div class="saturday timeClass-day">
                            '.$sat.'
                        </div>
                        <div class="sunday timeClass-day">
                            '.$sun.'
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <header class="header myclasses grid-fullwidth gridrow" style="background-color: while;">
        <div class="headerContainer gridrow grid">
            <div class="iconHeader grid-col-7 gridrow">
                <div class="iconHeaderImg">
                    <a href="index.php"><img src="images/Logo.png" alt="" srcset=""></a>
                </div>

            </div>
            <div class="menuHeader grid-col-5">
                <ul class="gridrow  ">
                    <li class="unline"><a href="index.php">Home</a></li>
                    <li class="unline"><a href="Myschool.php">My school</a></li>
                    <?php
                    echo $checkLogin;
                    ?>


                </ul>
            </div>
        </div>
    </header>
    <div class="to-top-sticky ">

        <a href="#banner">
            >
        </a>
    </div>

    <div class="body mclass">
        <section class="sectionHeadMyschool grid-fullwidth gridrow ">
            <div class="attendanceNote grid-col-2">
                <div class="attendanceNote-profile">
                    <div class="attendanceNote-profile-img">
                        <img src="images/iconschool.png" alt="" srcset=" ">
                    </div>
                    <span><?php echo $FullName ?></span>
                </div>
                <div class="attendanceNote-class ">
                    <div class="attendanceNote-class-header">
                        <i class="fas fa-plus"></i>
                        <span>Class</span>
                        <i class="fas fa-sort-up"></i>
                    </div>
                </div>
                <div class="attendanceNote-class ">
                    <div class="attendanceNote-class-header">
                        <i class="fas fa-plus"></i>
                        <span>Teacher</span>
                        <i class="fas fa-sort-up"></i>
                    </div>
                </div>
                <div class="attendanceNote-class ">
                    <div class="attendanceNote-class-header">
                        <i class="fas fa-plus"></i>
                        <span>Student</span>
                        <i class="fas fa-sort-up"></i>
                    </div>
                </div>


            </div>
            <div class="allClass grid-col-9 grid gridrow">
                <div class="hasClass listclassPresent grid-col-12">
                    <div class="rowLeft rowListClassPresent">

                        <i class="fas fa-chevron-left "></i>
                    </div>
                    <div class="rowRight rowListClassPresent">

                        <i class="fas fa-chevron-right "></i>
                    </div>
                    <h2 class="tittleTbl" id="tittleStudent">Current classes</h2>
                    <div class="listclassPresent-container">
                        <div class="classPresent-item">
                            <?php
                            if (!isset($_SESSION['idSchool'])) {
                                echo "Vui lòng đăng nhập!!";
                            } else {
                                include('config.php');
                                $idSchool = $_SESSION['idSchool'];
                                $sql = "SELECT * FROM `tbl_class`,tbl_teacher WHERE tbl_class.id_teacher =tbl_teacher.id_giaovien and tbl_class.id_school='$idSchool'";
                                $old = mysqli_query($conn, $sql);
                                function TimeIsBetweenTwoTimes($from, $till, $input)
                                {
                                    $f = DateTime::createFromFormat('H:i:s', $from);
                                    $t = DateTime::createFromFormat('H:i:s', $till);
                                    $i = DateTime::createFromFormat('H:i:s', $input);
                                    if ($f > $t) $t->modify('+1 day');
                                    return ($f <= $i && $i <= $t) || ($f <= $i->modify('+1 day') && $i <= $t);
                                }
                                $sql2 = "SELECT * FROM `tbl_group_student`";
                                $old2 = mysqli_query($conn,$sql2);
                                $maxStrlen = 0;
                                while($row2 = $old2->fetch_assoc()){
                                    if(strlen($row2['stringAtten'])>=$maxStrlen){
                                        $maxStrlen = strlen($row2['stringAtten']);
                                        
                                        
                                    }

                                    
                                }
                                
                                if (mysqli_num_rows($old) > 0) {
                                    

                                    while ($row = $old->fetch_assoc()) {
                                        if (date_default_timezone_set('Asia/Ho_Chi_Minh') && date("l") == $row['dayOfWeek']) {
                                            # code...
                                            $date = new DateTime();
                                            $s = $date->format('H:i:s');
                                            if (TimeIsBetweenTwoTimes($s, $row['timeStart'], $row['timeOver'])) {
                                                $row['timeStart'] = substr($row['timeStart'], 0, 5);
                                                $row['timeOver'] = substr($row['timeOver'], 0, 5);
                                                $idclasses = $row['id_class'];
                                                $sql3="SELECT * FROM `tbl_group_student` WHERE id_class='$idclasses'";
                                                $old3 = mysqli_query($conn,$sql3);
                                                $row3 = $old3->fetch_assoc();
                                                
                                                $percentCurent = 0;
                                                $stringA = "";
                                                $processClassPresent = "";
                                                if($maxStrlen>strlen($row3['stringAtten'])){
                                                    $percentCurent="No attendance yet";
                                                    $processClassPresent='<div class="processClassPresent" style="color:#fb3640; font-weight:600;font-size:16px;">'.$percentCurent.'</div>';
                                                }else{
                                                    
                                                    while($row31=$old3->fetch_assoc()){
                                                        $stringA.=substr($row31['stringAtten'], -1);
                                                    }
                                                    $percentCurent = substr_count($stringA, 'x') / strlen($stringA) * 100;
                                                    $processClassPresent='<div class="processClassPresent" style="color:white;">'.$percentCurent.'%</div>';
                                                }
                                                
                                                echo '<div class="classPresent">

                                               <div class="classPresentInfo">
                                                   <div class="classPresentName">
                                                       '.$row['subject'].'
                                                   </div>
                                                   <div class="classPresentTime">
                                                       ('.$row['timeStart'].' - '.$row['timeOver'].')
                                                   </div>
                                               </div>
                                               <div class="classPresentPercent">
                                                   '.$processClassPresent.'
                                               </div>
               
                                           </div>';
                                            } else {
                                            }
                                        }
                                    }
                                }
                            }
                            ?>


                            

                        </div>
                    </div>

                </div>
                <div class="hasClass grid-col-12">
                    <h2 class="tittleTbl" id="tittleStudent">Student</h2>
                    <div class="actionClass gridrow">
                        <div class="btn-action grid-col-3">
                            <button class="btn-action-exportExcel btn-getstarted">
                                Export File Excel
                            </button>
                        </div>

                        <div class="btn-action grid-col-3 find">
                            <div class="header-admin-search none-search">
                                <input class="input-search" onkeyup="search('#tblStudent')" type="text">

                                <i class="icon-search-admin fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="headerTblClass gridrow">
                        <div class="headerTblClass-fullName grid-col-3">Full Name</div>
                        <div class="headerTblClass-ID grid-col-3">ID</div>
                        <div class="headerTblClass-Attendance grid-col-3">Gender</div>
                        <div class="headerTblClass-action grid-col-3">Email</div>
                    </div>
                    <div class="bodyTblClass active" datatbl="" id="tblStudent">
                        <?php
                        if (!isset($_SESSION['idSchool'])) {
                            echo "Vui lòng đăng nhập!!";
                        } else {
                            include('config.php');
                            $idSchool = $_SESSION['idSchool'];
                            $sql = "SELECT * FROM `tbl_student` WHERE id_school='$idSchool'";
                            $old = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($old) > 0) {
                                while ($row = $old->fetch_assoc()) {
                                    echo '<div class="bodyTblClass-student studentRow gridrow">
                <div class="bodyTblClass-student-fullname grid-col-3">
                    <span>' . $row['fisrtName'] . ' ' . $row['lastName'] . '</span>
                </div>
                <div class="bodyTblClass-student-id grid-col-3">
                    <span>' . $row['id'] . '</span>
                </div>
                <div class="bodyTblClass-student-action grid-col-3">
                    <span>' . $row['gender'] . '</span>
                </div>
                <div class="bodyTblClass-student-action grid-col-3">
                    <span>' . $row['email'] . '</span>

                </div>

            </div>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="hasClass grid-col-12">
                    <h2 class="tittleTbl" id="tittleClass">Class</h2>
                    <div class="actionClass gridrow">
                        <div class="btn-action grid-col-3">
                            <button class="btn-action-exportExcel btn-getstarted">
                                Export File Excel
                            </button>
                        </div>
                        <div class="btn-action grid-col-3">
                            <button class="btn-action-exportExcel btn-getstarted">
                                Add Class
                            </button>
                        </div>
                        <div class="btn-action grid-col-3">
                            ...
                        </div>

                        <div class="btn-action grid-col-3 find">
                            <div class="header-admin-search none-search">
                                <input class="input-search" onkeyup="search('#tblClass')" type="text">

                                <i class="icon-search-admin fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="headerTblClass gridrow">
                        <div class="headerTblClass-fullName grid-col-2">ID</div>
                        <div class="headerTblClass-ID grid-col-2">Subject</div>
                        <div class="headerTblClass-Attendance grid-col-2">Teacher</div>
                        <div class="headerTblClass-Attendance grid-col-2">Day of week</div>
                        <div class="headerTblClass-Attendance grid-col-2">Time start</div>
                        <div class="headerTblClass-action grid-col-2">Time over</div>
                    </div>
                    <div class="bodyTblClass active" datatbl="" id="tblClass">
                        <?php
                        if (!isset($_SESSION['idSchool'])) {
                            echo "Vui lòng đăng nhập!!";
                        } else {
                            include('config.php');
                            $idSchool = $_SESSION['idSchool'];
                            $sql = "SELECT * FROM `tbl_class`,tbl_teacher WHERE tbl_class.id_teacher =tbl_teacher.id_giaovien and tbl_class.id_school='$idSchool'";
                            $old = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($old) > 0) {
                                while ($row = $old->fetch_assoc()) {
                                    echo '<div class="bodyTblClass-student  gridrow">
                <div class="bodyTblClass-student-fullname grid-col-2">
                    <span>' . $row['id_class'] . '</span>
                </div>
                <div class="bodyTblClass-student-fullname grid-col-2">
                    <span>' . $row['subject'] . '</span>
                </div>
                <div class="bodyTblClass-student-id grid-col-2">
                    <span>' . $row['id_giaovien'] . '</span>
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
                    </div>
                </div>
                <div class="hasClass grid-col-12">
                    <h2 class="tittleTbl" id="tittleTeacher">Teacher</h2>
                    <div class="actionClass gridrow">
                        <div class="btn-action grid-col-3">
                            <button class="btn-action-exportExcel btn-getstarted">
                                Export File Excel
                            </button>
                        </div>
                        <div class="btn-action grid-col-3">
                            <button class="btn-action-exportExcel btn-getstarted">
                                Add Teacher
                            </button>
                        </div>

                        <div class="btn-action grid-col-3 find">
                            <div class="header-admin-search none-search">
                                <input class="input-search" onkeyup="search('#tblTeacher')" type="text">

                                <i class="icon-search-admin fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="headerTblClass gridrow">
                        <div class="headerTblClass-fullName grid-col-2">Full Name</div>
                        <div class="headerTblClass-ID grid-col-2">ID</div>
                        <div class="headerTblClass-Attendance grid-col-2">Gender</div>
                        <div class="headerTblClass-action grid-col-2">Faculty</div>
                        <div class="headerTblClass-action grid-col-2">Email</div>
                    </div>
                    <div class="bodyTblClass active" datatbl="" id="tblTeacher">
                        <?php
                        if (!isset($_SESSION['idSchool'])) {
                            echo "Vui lòng đăng nhập!!";
                        } else {
                            include('config.php');
                            $idSchool = $_SESSION['idSchool'];
                            $sql = "SELECT * FROM `tbl_teacher`,faculty WHERE tbl_teacher.id_faculty = faculty.id and tbl_teacher.id_school='$idSchool'";
                            $old = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($old) > 0) {
                                while ($row = $old->fetch_assoc()) {
                                    echo '<div class="bodyTblClass-student rowTeacher gridrow">
                <div class="bodyTblClass-student-fullname grid-col-2">
                    <span>' . $row['fisrtName'] . ' ' . $row['lastName'] . '</span>
                </div>
                <div class="bodyTblClass-student-id grid-col-2">
                    <span>' . $row['id_giaovien'] . '</span>
                </div>
                <div class="bodyTblClass-student-gender grid-col-2">
                    <span>' . $row['gender'] . '</span>
                </div>
                <div class="bodyTblClass-student-faculty grid-col-2">
                    <span>' . $row['faculty_name'] . '</span>
                </div>
                <div class="bodyTblClass-student-email grid-col-2">
                    <span>' . $row['email_teacher'] . '</span>

                </div>

            </div>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>

                <div class="noClass grid-col-12">


                </div>
            </div>

        </section>

    </div>
    <footer class="footer">
        <div class="footer-feedback">
            <div class="footer-feedback-left">
                <div class="footer-feedback-left-container">
                    <h3>Get in touch</h3>
                    <div class="footer-feedback-left-container-div">
                        <i class="fas fa-phone"></i>
                        <span>0523923xxx</span>
                    </div>
                    <div class="footer-feedback-left-container-div">
                        <i class="fas fa-envelope"></i>
                        <span>thienv29@gmail.com</span>
                    </div>
                    <div class="footer-feedback-left-container-div">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>HCM city</span>
                    </div>

                </div>
            </div>

            <div class="footer-feedback-right">
                <form action="/diemdanh/controller/feedback.php" class="form" data-aos="fade-up" id="formfeedback" method="POST">
                    <h2>Feedback</h2>
                    <div class=" form-div">
                        <input class="input" type="text" name="email" required>
                        <label for="user" class="form-label">
                            <span class="label-content">Email</span>
                        </label>
                    </div>
                    <div class=" form-div">
                        <!-- <i class="fas fa-signature"></i> -->
                        <input class="input" type="text" name="name" required>
                        <label for="name" class="form-label">
                            <span class="label-content"> Name</span>
                        </label>
                    </div>
                    <div class=" form-div">
                        <input class="input" type="text" name="message" required>
                        <label for="message" class="form-label">
                            <span class="label-content">Mesage</span>
                        </label>
                    </div>
                    <button class="btn-getstarted feedback-button">Send</button>
                </form>
            </div>


        </div>
        <div class="grid  grid-footer">
            <div class="grid-fullwidth gridrow gridrow-footer2">

                <div class="gridcol-2-category-footer">
                    <h3>Take care of customers</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Help center</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Shopping guide</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Tickid Mall</a>
                        </li>
                    </ul>
                </div>
                <div class="gridcol-2-category-footer">
                    <h3>TICKID</h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">About Tickid</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Recruitment</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">Terms</a>
                        </li>
                    </ul>

                </div>
                <div class="gridcol-2-category-footer">
                    <h3>Contact us </h3>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <i class="fab fa-facebook"></i>
                            <a href="#" class="footer-item-link">Facbook</a>
                        </li>
                        <li class="footer-item">
                            <i class="fab fa-instagram"></i>
                            <a href="#" class="footer-item-link">Instagram</a>
                        </li>
                        <li class="footer-item">
                            <i class="fab fa-twitter"></i>
                            <a href="#" class="footer-item-link">Twiter</a>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
        <div class="lastest">
            <p>© 2020 DevTools. Tất cả các quyền được bảo lưu.</p>
        </div>

        </div>

    </footer>
    <script type="text/javascript">
    console.log(document.querySelector(".classPresent-item").innerHTML);
        if(document.querySelector(".classPresent-item").querySelector(".classPresent")==null){
            const row = document.querySelectorAll(".rowListClassPresent")
            row.forEach(element => {
               element.style.display = "none" 
            });
        }
        const myElement = document.querySelector(".classPresent-item")
        var style = window.getComputedStyle(myElement);
        var matrix = new WebKitCSSMatrix(style.transform);
        var widthContainerClassPresent = 0
        const listClassPresent = document.querySelectorAll(".classPresent");
        listClassPresent.forEach(element => {
            widthContainerClassPresent += element.offsetWidth;
        });
        widthContainerClassPresent -= 700
        console.log(widthContainerClassPresent);


        document.querySelector(".rowRight").onclick = function() {
            if (matrix.m41 < -widthContainerClassPresent) {

                document.querySelector(".classPresent-item").style.transform = `translatex(${ 0}px)`
                matrix.m41 = 0
            } else {

                document.querySelector(".classPresent-item").style.transform = `translatex(${ matrix.m41-=200}px)`
            }
        }
        document.querySelector(".rowLeft").onclick = function() {
            if (matrix.m41 == 0) {

            } else {

                document.querySelector(".classPresent-item").style.transform = `translatex(${ matrix.m41+=200}px)`
            }
        }

        function search(list) {
            var input, filter, ul, li, a, i, txtValue, temp;
            ul = document.querySelector(list);
            input = ul.parentElement.querySelector(".input-search");
            filter = input.value.toUpperCase();
            li = ul.querySelectorAll(".bodyTblClass-student");
            for (i = 0; i < li.length; i++) {

                a = li[i].querySelectorAll("span");

                temp = a[0].textContent + String(a[1].textContent) + String(a[2].textContent);
                txtValue = temp;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none ";
                }
            }
        }
        const percentCircle = document.querySelector('.course-percent .course-percent-circle:nth-child(2)')
        const spanPercent = document.querySelector('.course-percent-text').innerHTML
        percentInt = parseInt(spanPercent.split("s")[0])
        percentCircle.style.strokeDasharray = "220"
        percentCircle.style.strokeDashoffset = `calc(220 - (220*${percentInt})/100`

        function getList(quyery, link) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.querySelector(quyery).innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", link, true);
            xmlhttp.send();
        }
        const modal = document.querySelector(".modal");
        const teacherRow = document.querySelectorAll(".rowTeacher")
        
        for (let index = 0; index < teacherRow.length; index++) {
            const e = teacherRow[index];
            e.onmousedown = function() {

                var idteacher = e.querySelector(".bodyTblClass-student-id span").innerHTML
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        html = this.responseText
                        document.querySelector("#timeTableTea").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "schoolgetTimeTable.php?idteacher=" + idteacher, true);
                xmlhttp.send();
                var name = e.querySelector(".bodyTblClass-student-fullname span").innerHTML
                var id = e.querySelector(".bodyTblClass-student-id span").innerHTML
                var gender = e.querySelector(".bodyTblClass-student-gender span").innerHTML
                var fac = e.querySelector(".bodyTblClass-student-faculty span").innerHTML
                var mail = e.querySelector(".bodyTblClass-student-email span").innerHTML
                document.querySelector(".modal-teacher-info .studentInfo-item-right-name").innerHTML = "Full name: " + name
                document.querySelector(".modal-teacher-info .studentInfo-item-right-gender").innerHTML = "Gender: " + gender
                document.querySelector(".modal-teacher-info .studentInfo-item-right-id").innerHTML = "ID: " + id
                document.querySelector(".modal-teacher-info .studentInfo-item-right-email").innerHTML = "Email: " + mail
                document.querySelector(".modal-teacher-info .studentInfo-item-right-faculty").innerHTML = "Faculty: " + fac
            }
            e.onmouseup = function() {
                function countMinute(timeStart, timeOver) {
                    hourStart = parseInt(timeStart.split(":")[0]);
                    minuteStart = parseInt(timeStart.split(":")[1]);
                    hourOver = parseInt(timeOver.split(":")[0]);
                    minuteOver = parseInt(timeOver.split(":")[1]);
                    sumMinute = (60 - minuteStart) + ((hourOver - hourStart - 1) * 60) + minuteOver
                    return parseFloat(sumMinute)
                }

                function minuteToPercent(count, minutePercent) {
                    return count * minutePercent
                }

                function timeClassToPercent(timeStart, timeOver) {
                    return 100 / countMinute(timeStart, timeOver)
                }
                const classStartTime = document.querySelector("#timeTableTea .timeClass").getAttribute("start")
                const classOverTime = document.querySelector("#timeTableTea .timeClass").getAttribute("over")
                const minutePercent = document.querySelector("#timeTableTea .timeClass").getAttribute("minusPercent")
                const timeClassPercent = timeClassToPercent(classStartTime, classOverTime)

                const listday = document.querySelectorAll("#timeTableTea .timeClass-day")
                for (let index = 0; index < listday.length; index++) {
                    const element = listday[index];
                    const subject = element.querySelectorAll("#timeTableTea .classTeacher")
                    for (let i = 0; i < subject.length; i++) {
                        var subjectStart = subject[i].getAttribute("start")
                        var subjectOver = subject[i].getAttribute("over")
                        const height = minuteToPercent(countMinute(subjectStart, subjectOver), timeClassPercent);
                        const top = minuteToPercent(countMinute(classStartTime, subjectStart), timeClassPercent);
                        subject[i].style.top = `${top}%`;
                        subject[i].style.height = `${height}%`;
                    }
                }
                modal.classList.add("teacherif");
            }
        }

        const studentRow = document.querySelectorAll(".studentRow");

        const bgmodal = document.querySelector(".bgModal");
        bgmodal.onclick = function() {
            modal.setAttribute("class", "modal");

        }
        for (let index = 0; index < studentRow.length; index++) {
            const e = studentRow[index];
            e.onmousedown = function() {
                var idstudent = e.querySelector(".bodyTblClass-student-id span").innerHTML
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        html = this.responseText
                        document.querySelector(".studentInfo").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "schoolGetinfoStudent.php?idstudent=" + idstudent, true);
                xmlhttp.send();
                var xmlhttp1 = new XMLHttpRequest();
                xmlhttp1.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        document.querySelector(".listClass-container").innerHTML = this.responseText;
                    }
                };
                xmlhttp1.open("GET", "schoolGetclassOfStudent.php?idstudent=" + idstudent, true);
                xmlhttp1.send();
                var xmlhttp2 = new XMLHttpRequest();
                xmlhttp2.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        document.querySelector("#timeTableStu").innerHTML = this.responseText;
                    }
                };
                xmlhttp2.open("GET", "schoolGettimeTableStudent.php?idstudent=" + idstudent, true);
                xmlhttp2.send();

            }
            e.onmouseup = function() {
                var nameTeacher = document.querySelector(".classInfo-teacher-name")
                var timeClassinfo = document.querySelector(".classInfo-time");
                console.log(timeClassinfo);
                var numless = document.querySelector(".classInfo-numLesson");
                var numdi = document.querySelector(".classInfo-numDiligence");
                var numab = document.querySelector(".classInfo-numAbsence")
                const listclassItem = document.querySelectorAll(".listClass-item")
                listclassItem[0].classList.add("active");
                var itme = document.querySelector(".listClass-item.active")
                nameTeacher.innerHTML = "Teacher: " + itme.getAttribute("nameTeacher")
                timeClassinfo.innerHTML = "Time: " + itme.getAttribute("time")
                numless.innerHTML = `Num of lessons: <span>${itme.getAttribute("numOfLess")}</span>`
                numdi.innerHTML = `Diligence: <span>${itme.getAttribute("numDiligence")}</span><div class="processInfo"></div>`
                numab.innerHTML = `Absence: <span>${itme.getAttribute("numAbsence")}</span><div class="processInfo"></div>`
                const process = document.querySelectorAll(".processInfo")
                for (let index = 0; index < process.length; index++) {
                    const e = process[index];
                    var percentLesson = parseInt(e.parentElement.querySelector("span").innerHTML)

                    var numLesson = parseInt(e.parentElement.parentElement.querySelector(".classInfo-numLesson span").innerHTML)
                    var per = percentLesson / numLesson * 100
                    e.style.width = `${per}%`;

                }
                const listSubjectModal = document.querySelectorAll(".listClass-item")
                for (let index = 0; index < listSubjectModal.length; index++) {
                    const element = listSubjectModal[index];
                    element.onclick = function() {
                        element.classList.add("active")
                        for (let j = 0; j < listSubjectModal.length; j++) {
                            if (j == index) {

                            } else {

                                listSubjectModal[j].classList.remove("active")
                            }

                        }
                        itme = document.querySelector(".listClass-item.active")
                        nameTeacher.innerHTML = "Teacher: " + itme.getAttribute("nameTeacher")
                        timeClassinfo.innerHTML = "Time: " + itme.getAttribute("time")
                        numless.innerHTML = `Num of lessons: <span>${itme.getAttribute("numOfLess")}</span>`
                        numdi.innerHTML = `Diligence: <span>${itme.getAttribute("numDiligence")}</span><div class="processInfo"></div>`
                        numab.innerHTML = `Absence: <span>${itme.getAttribute("numAbsence")}</span><div class="processInfo"></div>`
                        const process = document.querySelectorAll(".processInfo")
                        for (let index = 0; index < process.length; index++) {
                            const e = process[index];
                            var percentLesson = parseInt(e.parentElement.querySelector("span").innerHTML)

                            var numLesson = parseInt(e.parentElement.parentElement.querySelector(".classInfo-numLesson span").innerHTML)
                            var per = percentLesson / numLesson * 100
                            e.style.width = `${per}%`;

                        }
                    }
                }

                function countMinute(timeStart, timeOver) {
                    hourStart = parseInt(timeStart.split(":")[0]);
                    minuteStart = parseInt(timeStart.split(":")[1]);
                    hourOver = parseInt(timeOver.split(":")[0]);
                    minuteOver = parseInt(timeOver.split(":")[1]);
                    sumMinute = (60 - minuteStart) + ((hourOver - hourStart - 1) * 60) + minuteOver
                    return parseFloat(sumMinute)
                }

                function minuteToPercent(count, minutePercent) {
                    return count * minutePercent
                }

                function timeClassToPercent(timeStart, timeOver) {
                    return 100 / countMinute(timeStart, timeOver)
                }
                const classStartTime = document.querySelector(".timeClass").getAttribute("start")
                const classOverTime = document.querySelector(".timeClass").getAttribute("over")
                const minutePercent = document.querySelector(".timeClass").getAttribute("minusPercent")
                const timeClassPercent = timeClassToPercent(classStartTime, classOverTime)

                const listday = document.querySelectorAll(".timeClass-day")
                for (let index = 0; index < listday.length; index++) {
                    const element = listday[index];
                    const subject = element.querySelectorAll(".classTeacher")
                    for (let i = 0; i < subject.length; i++) {
                        var subjectStart = subject[i].getAttribute("start")
                        var subjectOver = subject[i].getAttribute("over")
                        const height = minuteToPercent(countMinute(subjectStart, subjectOver), timeClassPercent);
                        const top = minuteToPercent(countMinute(classStartTime, subjectStart), timeClassPercent);
                        subject[i].style.top = `${top}%`;
                        subject[i].style.height = `${height}%`;
                    }
                }
                const selectWeek = document.querySelector("#seclectWeek");
                const listClassTimeTable = document.querySelectorAll("#timeTableStu .classTeacher")
                for (let index = 0; index < listClassTimeTable.length; index++) {
                    const e = listClassTimeTable[index];
                    select = seclectWeek.value;
                    strA = e.getAttribute("strAtte")
                    res = strA.substr(0, 1);
                    console.log(res)
                    if (res == "x") {
                        e.style.backgroundColor = "#3db5ad"
                    } else if (res == "v") {
                        e.style.backgroundColor = "#d35757"
                    } else {
                        e.style.backgroundColor = "#808080"
                    }

                }
                selectWeek.onchange = function() {
                    for (let index = 0; index < listClassTimeTable.length; index++) {
                        const e = listClassTimeTable[index];
                        select = seclectWeek.value;
                        strA = e.getAttribute("strAtte")
                        res = strA.substr(select - 1, 1);
                        console.log(res)
                        if (res == "x") {
                            e.style.backgroundColor = "#3db5ad"
                        } else if (res == "v") {
                            e.style.backgroundColor = "#d35757"
                        } else {
                            e.style.backgroundColor = "#808080"
                        }

                    }
                }

                modal.classList.add("studentif");


            }

        }
    </script>

</body>
<script type="text/javascript" src="js/header.js"></script>
<script src="js/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
    });
</script>


</html>