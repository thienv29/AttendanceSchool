<?php
session_start();
$checkLogin = "";
$mine = '<li class="unline"><a href="Myclass.php">Class/School/Subject</a></li>';
if (isset($_SESSION['user']) || isset($_SESSION['id']) || isset($_SESSION['idSchool'])) {

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
} else {
    $checkLogin = '<li class="unline"><a href="login.php">Login</a></li>';
}
$mon = "";
$tue = "";
$wed = "";
$thu = "";
$fri = "";
$sat = "";
$sun = "";
$wokingTimeStart = "";
$wokingTimeOver = "";
if (isset($_SESSION['user'])) {
    $mine = '<li class="unline"><a href="Myclass.php">My class</a></li><li class="unline"><a href="timeTable.php">Schedule</a></li>';
    include('config.php');
    $idteacher = $_SESSION['idteacher'];
    $idschool = "";
    $sql = "SELECT tbl_teacher.id_giaovien,tbl_class.timeStart,tbl_class.timeOver,tbl_class.subject,tbl_class.id_school,tbl_class.dayOfWeek FROM tbl_class,tbl_teacher WHERE tbl_teacher.id_giaovien='$idteacher'  and tbl_teacher.id_giaovien = tbl_class.id_teacher";
    $old = mysqli_query($conn, $sql);
    if (mysqli_num_rows($old) > 0) {
        while ($row = $old->fetch_assoc()) {
            $idschool = $row['id_school'];
            if ($row['dayOfWeek'] == "Monday") {
                $mon .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Tuesday") {
                $tue .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Wednesday") {
                $wed .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Thursday") {
                $thu .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Friday") {
                $fri .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Saturday") {
                $sat .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Sunday") {
                $sun .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            }
        }
    }

    $sql1 = "SELECT * FROM `schools` WHERE id='$idschool'";
    $old1 = mysqli_query($conn, $sql1);
    $row1 = $old1->fetch_assoc();
    $wokingTimeStart = $row1['wokingTimeStart'];
    $wokingTimeOver = $row1['wokingTimeOver'];
} elseif (isset($_SESSION['id'])) {
    $mine = '<li class="unline"><a href="Mysubject.php">My subject</a></li><li class="unline"><a href="timeTable.php">Schedule</a></li>';
    include('config.php');
    $idstudent = $_SESSION['id'];
    $idschool = "";
    $sql = "SELECT tbl_group_student.id_student,tbl_class.id_class,tbl_class.id_school,tbl_class.timeStart,tbl_class.timeOver,tbl_class.subject,tbl_class.dayOfWeek FROM tbl_group_student,tbl_class WHERE tbl_group_student.id_class=tbl_class.id_class and tbl_group_student.id_student = '$idstudent'";
    $old = mysqli_query($conn, $sql);
    if (mysqli_num_rows($old) > 0) {
        while ($row = $old->fetch_assoc()) {
            $idschool = $row['id_school'];
            if ($row['dayOfWeek'] == "Monday") {
                $mon .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Tuesday") {
                $tue .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Wednesday") {
                $wed .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Thursday") {
                $thu .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Friday") {
                $fri .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Saturday") {
                $sat .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            } else if ($row['dayOfWeek'] == "Sunday") {
                $sun .= '<div class="classTeacher" start="' . $row['timeStart'] . '" over="' . $row['timeOver'] . '"  >
                    <div class="classTeacher-content">

                        <span class="subject-name">' . $row['subject'] . ' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
            }
        }
    }

    $sql1 = "SELECT * FROM `schools` WHERE id='$idschool'";
    $old1 = mysqli_query($conn, $sql1);
    $row1 = $old1->fetch_assoc();
    $wokingTimeStart = $row1['wokingTimeStart'];
    $wokingTimeOver = $row1['wokingTimeOver'];
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
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/aos.css">
    <link rel="icon" href="images/attendance-icon-7.jpg">
</head>

<body>
    <div id="banner"></div>

    <header class="header grid-fullwidth gridrow">
        <div class="headerContainer gridrow grid">
            <div class="iconHeader grid-col-7 gridrow">
                <div class="iconHeaderImg">
                    <a href="index.php"><img src="images/Logo.png" alt="" srcset=""></a>
                </div>

            </div>
            <div class="menuHeader grid-col-5">
                <ul class="gridrow  ">
                    <li class="unline"><a href="index.php">Home</a></li>
                    <?php
                    echo $mine;
                    ?>

                    <?php
                    echo $checkLogin;
                    ?>


                </ul>
            </div>
        </div>
    </header>
    <div class="to-top-sticky ">

        <a href="#banner">
            ->
        </a>
    </div>

    <div class="body">
        <section class="sectionTimeTable" name="banner">
            <div class="sectionTimeTable-container grid-fullwidth ">
                <div class="sectionTimeTable-container-main gridrow grid">
                    <div class="dayOfWeek">
                        <div class="dayOfWeek-day">Monday</div>
                        <div class="dayOfWeek-day">Tuesday</div>
                        <div class="dayOfWeek-day">Wednesday</div>
                        <div class="dayOfWeek-day">Thursday</div>
                        <div class="dayOfWeek-day">Friday</div>
                        <div class="dayOfWeek-day">Saturday</div>
                        <div class="dayOfWeek-day">Sunday</div>
                    </div>
                    <div class="timeClass" start="07:00" over="18:00">
                        <div class="morningaffternoon">

                        </div>
                        <div class="monday timeClass-day">
                            <?php echo $mon ?>
                        </div>
                        <div class="tuesday timeClass-day">
                            <?php echo $tue ?>
                        </div>
                        <div class="wednesday timeClass-day">
                            <?php echo $wed ?>
                        </div>
                        <div class="thursday timeClass-day">
                            <?php echo $thu ?>
                        </div>
                        <div class="friday timeClass-day">
                            <?php echo $fri ?>
                        </div>
                        <div class="saturday timeClass-day">
                            <?php echo $sat ?>
                        </div>
                        <div class="sunday timeClass-day">
                            <?php echo $sun ?>
                        </div>
                    </div>
                    <script>
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
                                subject[i].querySelector(".subject-time").innerHTML = `(${subjectStart} - ${subjectOver})`
                            }
                        }
                    </script>


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
                <form action="feedback.php" class="form" data-aos="fade-up" id="formfeedback" method="POST">
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



</body>
<script src="js/header.js"></script>
<script src="js/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
    });
</script>

</html>