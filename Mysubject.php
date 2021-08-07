<?php
session_start();
if (!isset($_SESSION['id'])) {
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
    <link rel="stylesheet" href="css/aos.css">
    <link rel="icon" href="images/attendance-icon-7.jpg">
</head>

<body>
    <div id="banner"></div>
    <div class="modal ">
        <div class="bgModal"></div>
        <div class="modal-div">
            <?php
            include('config.php');

            $count = 0;
            if ($count == 0) {
                $count++;
                $idStudent = $_SESSION['id'];
                $sql = "SELECT tbl_class.id_class,tbl_class.subject FROM `tbl_group_student`,tbl_class WHERE id_student='$idStudent' and tbl_group_student.id_class=tbl_class.id_class";
                $old = mysqli_query($conn, $sql);
                $count = 0;
                $temp = "";

                if (mysqli_num_rows($old) > 0) {
                    while ($row  = $old->fetch_assoc()) {
                        if ($count == 0) {
                            $temp = "active";
                            $count++;
                        } else {
                            $temp = "";
                        }
                        echo '<div class="modal-main-chat ' . $temp . '" idclass=' . $row['id_class'] . '>
                                <div class="modal-main-chat-box">
                                    <div class="modal-main-chat-box-header">
                                        <div class="modal-main-chat-box-header-exit">
                                            <button class="modal-main-chat-box-header-exit-btn"><i class="fas fa-chevron-left"></i></button>
                                        </div>
                                        <div class="modal-main-chat-box-header-img">
                                            <img src="images/iconclass.png" alt="">
                                        </div>
                                        <div class="modal-main-chat-box-header-text">
                                            ' . $row['subject'] . '
                                        </div>
                                    </div>
                            <div class="modal-main-chat-box-body"></div>
                        <div class="modal-main-chat-box-footer">

                        <input type="file" class="inputfileChat" accept="*">
                        <label for="inputfileChat" class="inputfileLb"><i class="fas fa-plus"></i></label>
                        <input type="text" class="inputChat">
                        <button class="btn-send"><i class="fas fa-paper-plane"></i></button>

                        </div>

                </div></div>';
                    }
                }
            }
            ?>

            <div class="modal-main">

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
                    <li class="unline"><a href="Mysubject.php">My subject</a></li>
                    <li class="unline"><a href="timeTable.php">Schedule</a></li>
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
        <section class="sectionHeadMyclass grid gridrow ">
            <div class="attendanceNote grid-col-3" data-aos="fade-right">
                <div class="attendanceNote-profile">
                    <div class="attendanceNote-profile-img">
                        <img src="images/student.png" alt="" srcset=" ">
                    </div>
                    <span><?php echo $FullName ?></span>
                </div>
                <div class="attendanceNote-class active">
                    <div class="attendanceNote-class-header">
                        <i class="fas fa-plus"></i>
                        <span>My Subject</span>
                        <i class="fas fa-sort-up"></i>
                    </div>
                    <?php
                    include('config.php');
                    $idstudent = $_SESSION['id'];
                    $sql = "SELECT tbl_class.subject,tbl_class.id_class,tbl_class.dayOfWeek,tbl_class.timeStart,tbl_class.timeOver FROM tbl_teacher,tbl_class,tbl_group_student where tbl_class.id_teacher=tbl_teacher.id_giaovien and tbl_group_student.id_class=tbl_class.id_class and tbl_group_student.id_student='$idstudent'";
                    $old = mysqli_query($conn, $sql);
                    $countClass = 0;
                    $listIdClass = array();
                    if (mysqli_num_rows($old) > 0) {
                        while ($row = $old->fetch_assoc()) {
                            array_push($listIdClass, $row['id_class']);
                            $temp = "";
                            if ($countClass == 0) {
                                $temp = "active";
                            }
                            $row['timeStart'] = substr($row['timeStart'], 0, 5);
                            $row['timeOver'] = substr($row['timeOver'], 0, 5);
                            echo '<div class="attendanceNote-class-item ' . $temp . ' idClass="' .   $row['id_class'] .  '">
                                <i class="fas fa-minus"></i>
                                <div class="attendanceNote-class-item-text">
        
                                    <span class="attendanceNote-class-item-name">' . $row['subject'] . '</span>
                                    <br>
                                    <span class="attendanceNote-class-item-time">(' . $row['dayOfWeek'] . ' ' . $row['timeStart'] . ' ' . $row['timeOver'] . ')</span>
                                    </div>
                                    <i class="fas fa-minus"></i>
            
                                </div>';

                            $countClass++;
                        }
                    }
                    ?>



                </div>
            </div>
            <div class="allClass grid-col-8 grid gridrow">
                <div class="hasClass grid-col-12">
                    <div class="actionClass gridrow">


                        <div class="btn-action grid-col-3">
                            <button class="btn-action-exportExcel btn-getstarted">
                                Export File Excel
                            </button>
                        </div>
                        <div class="btn-action grid-col-3">
                            <button class="btn-action-chat btn-getstarted">
                                Chat
                            </button>
                        </div>
                        <div class="btn-action grid-col-3 find">
                            <div class="header-admin-search none-search">
                                <input class="input-search" type="text" onkeyup="search()" id="myInput">

                                <i class="icon-search-admin fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="headerTblClass gridrow">
                        <div class="headerTblClass-fullName grid-col-3">Full Name</div>
                        <div class="headerTblClass-ID grid-col-3">ID</div>
                        <div class="headerTblClass-Attendance grid-col-3">Gender</div>
                        <div class="headerTblClass-action grid-col-3">Attendance</div>
                    </div>
                    <?php

                    for ($i = 0; $i < $countClass; $i++) {
                        if ($i == 0) {

                            echo '<div class="bodyTblClass active" datatbl="">';
                            $sql = 'SELECT tbl_student.lastName,tbl_student.fisrtName,tbl_student.gender,tbl_student.id,tbl_group_student.stringAtten FROM tbl_student,tbl_group_student WHERE tbl_student.id_student=tbl_group_student.id_student and tbl_group_student.id_class=' . $listIdClass[$i];
                            $old = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($old) > 0) {
                                $count = 0;
                                while ($row = $old->fetch_assoc()) {
                                    $percent = substr_count($row['stringAtten'], 'x') / strlen($row['stringAtten']) * 100;
                                    settype($percent, "integer");
                                    echo '<div class="bodyTblClass-student gridrow">
                                         <div class="bodyTblClass-student-fullname grid-col-3">
                                             <span>' . $row['fisrtName'] . ' ' . $row['lastName'] . '</span>
                                         </div>
                                         <div class="bodyTblClass-student-id grid-col-3">
                                             <span>' . $row['id'] . '</span>
                                         </div>
                                         <div class="bodyTblClass-student-action grid-col-3">
                                             <span>' . $row['gender'] . '</span>
                                         </div>
                                         <div class="bodyTblClass-student-attendance grid-col-3">
                                             <span>' . $percent . '%</span>
                                             <div class="processBar"></div>
             
                                         </div>
                                         
                                     </div>';
                                }
                            }
                        } else if ($i > 0) {
                            echo '<div class="bodyTblClass" datatbl="">';
                            $sql2 = 'SELECT tbl_student.lastName,tbl_student.fisrtName,tbl_student.gender,tbl_student.id,tbl_group_student.stringAtten FROM tbl_student,tbl_group_student WHERE tbl_student.id_student=tbl_group_student.id_student and tbl_group_student.id_class=' . $listIdClass[$i];
                            $old2 = mysqli_query($conn, $sql2);
                            if (mysqli_num_rows($old2) > 0) {
                                while ($row = $old2->fetch_assoc()) {
                                    $percent = substr_count($row['stringAtten'], 'x') / strlen($row['stringAtten']) * 100;
                                    settype($percent, "integer");
                                    echo '<div class="bodyTblClass-student gridrow">
                                         <div class="bodyTblClass-student-fullname grid-col-3">
                                             <span>' . $row['fisrtName'] . ' ' . $row['lastName'] . '</span>
                                         </div>
                                         <div class="bodyTblClass-student-id grid-col-3">
                                             <span>' . $row['id'] . '</span>
                                         </div>
                                         <div class="bodyTblClass-student-action grid-col-3">
                                             <span>' . $row['gender'] . '</span>
                                         </div>
                                         <div class="bodyTblClass-student-attendance grid-col-3">
                                             <span>' . $percent . '%</span>
                                             <div class="processBar"></div>
             
                                         </div>
                                         
                                     </div>';
                                }
                            }
                        }

                        echo '</div>';
                    }
                    ?>




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
        function search() {
            var input, filter, ul, li, a, i, txtValue, temp;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.querySelector(".bodyTblClass.active");
            li = ul.querySelectorAll(".bodyTblClass-student");
            for (i = 0; i < li.length; i++) {

                a = li[i].querySelectorAll("span");

                temp = a[0].textContent + String(a[1].textContent) + String(a[2].textContent);
                console.log(temp)
                txtValue = temp;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none ";
                }
            }
        }

        var listinput = document.querySelectorAll(".inputfileLb")
        for (let index = 0; index < listinput.length; index++) {
            const element = listinput[index];
            element.onclick = function() {
                element.parentElement.querySelector(".inputfileChat").click();
            }

        }
        chat = document.querySelector(".btn-action-chat")
        modal = document.querySelector(".modal")
        bgmodal = document.querySelector(".bgModal")
        btnChat = document.querySelector(".btn-action-chat")
        btnExitChat = document.querySelectorAll(".modal-main-chat-box-header-exit-btn")
        var intervalId
        countBtn = 0
        for (let index = 0; index < btnExitChat.length; index++) {
            const element = btnExitChat[index];
            element.onclick = function() {
                modal.style.display = "none";
                modal.classList.remove("modalChat");
                clearInterval(intervalId)
            }
        }

        btnChat.onclick = function() {
            modal.classList.add("modalChat");
            modal.style.display = "flex"
            const str = document.querySelector(".modal-main-chat.active").getAttribute("idclass")
            var num = document.querySelectorAll(".modal-main-chat.active .modal-main-chat-box-body .message").length
            intervalId = window.setInterval(function() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.querySelector(".modal-main-chat.active .modal-main-chat-box-body").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "getChat.php?id=" + str, true);
                xmlhttp.send();
                var objDiv = document.querySelector(".modal-main-chat.active .modal-main-chat-box-body");
                var mess = objDiv.querySelectorAll(".message");
                console.log(mess.length);
                console.log(num.length);

                if (mess.length > num)
                    objDiv.scrollTop = objDiv.scrollHeight;
                num = mess.length
            }, 500);
        }


        const attendanceNote = document.querySelector(".attendanceNote-class")
        const attendanceNoteHead = document.querySelector(".attendanceNote-class-header")
        attendanceNoteHead.onclick = function() {
            attendanceNote.classList.toggle("active")
        }
        const attendanceNoteitemList = document.querySelectorAll(".attendanceNote-class-item")
        const tblclassList = document.querySelectorAll(".bodyTblClass")
        const listChat = document.querySelectorAll(".modal-main-chat");
        for (let i = 0; i < attendanceNoteitemList.length; i++) {

            const e = attendanceNoteitemList[i];
            e.onclick = function() {
                countBtn = 0

                tblclassList[i].classList.add("active");
                listChat[i].classList.add("active");
                for (let j = 0; j < tblclassList.length; j++) {
                    tblclassList[j].setAttribute("datatbl", `${j}`);
                    if (j == i) {
                        tblclassList[j].setAttribute("datatbl", j);

                    } else {

                        tblclassList[j].classList.remove("active");
                        listChat[j].classList.remove("active");
                    }
                }
                document.querySelector('.btn-action-chat').setAttribute("datatbl", i);
                e.classList.add("active")
                for (let j = 0; j < attendanceNoteitemList.length; j++) {
                    if (j == i) {} else {

                        const e = attendanceNoteitemList[j];
                        e.classList.remove("active")
                    }
                }
            }

        }
        const attendancePercent = document.querySelectorAll(".bodyTblClass-student-attendance");

        for (let index = 0; index < attendancePercent.length; index++) {
            const element = attendancePercent[index];
            var percent = parseInt(element.querySelector("span").innerText);
            var e2 = element.querySelector(".processBar")
            e2.style.width = percent + "%"
            if (percent < 50) {
                e2.style.backgroundColor = "#1fab89";
            } else if (percent >= 50 && percent < 80) {
                e2.style.backgroundColor = "#62d2a2";

            } else if (percent >= 80) {
                e2.style.backgroundColor = "#9df3c4";

            }
        }
       



        const listModalChat = document.querySelectorAll(".modal-main-chat-box");
        const listInputfile = document.querySelectorAll(".modal-main-chat .inputfileChat")
        var string = ""
        for (let index = 0; index < listModalChat.length; index++) {
            const element = listModalChat[index];
            listInputfile[index].onchange = function() {
                string += `<a href="upload/${listInputfile[index].files[0].name}">${listInputfile[index].files[0].name}</a><br>`
            }
            element.querySelector(".btn-send").onclick = function() {
                uploadFile();
                string += element.querySelector(".inputChat").value

                if (string != "") {
                    const idclass = element.parentElement.getAttribute("idclass");
                    const today = new Date()
                    const name = "<?php echo $FullName ?>"
                    const distinv2 = "<?php echo $_SESSION['idStudent'] ?>"

                    console.log(distinv2);
                    time = `${today.getFullYear()}-${today.getMonth()}-${today.getDay()} ${today.getHours()}:${today.getMinutes()}:${today.getSeconds()}`
                    console.log(time)
                    var xmlhttp = new XMLHttpRequest();

                    xmlhttp.open("GET", "sendMessage.php?idclass=" + idclass + "&time=" + time + "&message=" + string + "&name=" + name + "&distin=" + 0 + "&distinv2=" + distinv2, true);

                    xmlhttp.send();
                    element.querySelector(".inputChat").value = ""
                    string="";
                } else {

                }

                
            }
            element.querySelector(".inputChat").onkeyup = function(e) {
                if (e.keyCode === 13) {
                    element.querySelector(".btn-send").click()
                }
            }
        }

        function uploadFile() {
            var files = document.querySelector(".modal-main-chat.active .inputfileChat").files;
            if (files.length > 0) {
                var formData = new FormData();
                formData.append("file", files[0]);
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "uploadFile.php", true);
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        
                    }
                };
                xhttp.send(formData);
            } else {}

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