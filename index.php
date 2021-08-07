<?php
session_start();
$checkLogin = "";
$mine='<li class="unline"><a href="Myclass.php">Class/School/Subject</a></li>';
if (isset($_SESSION['user'])||isset($_SESSION['id'])||isset($_SESSION['idSchool'])) {
    
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
if (isset($_SESSION['user'])) {
    $mine='<li class="unline"><a href="Myclass.php">My class</a></li>
    <li class="unline"><a href="timeTable.php">Schedule</a></li>';
}elseif (isset($_SESSION['id'])) {
    $mine='<li class="unline"><a href="Mysubject.php">My subject</a></li>
    <li class="unline"><a href="timeTable.php">Schedule</a></li>';
    
}elseif (isset($_SESSION['idSchool'])) {

    $mine='<li class="unline"><a href="Myschool.php">My school</a></li>';
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
        <section class="sectionHead" name="banner">
            <div class="tittleSectionHead">
                <div class="tittleSectionHeadImg" data-aos="fade-down">
                    <img src="images/Logo.png" alt="Logo">
                </div>
                <div class="tittleSectionHeadInput" data-aos="fade-up">
                    <form action="Myclass.php">

                        <input type="submit" class="btnSecion1 btn-getstarted" value="Go to My class">
                    </form>
                </div>
            </div>
        </section>
        <section class="myclass grid-fullwidth gridrow " id="Myclass">
            <div class="grid gridrow">
                <div class="quotes">
                    <div class="card grid-col-3 " data-aos="fade-right">
                        <div class="box box1">
                            <p>The first step toward success is taken when you refuse to be a captive of the environment in which you first find yourself. </p>
                            <h1><i class="fa fa-podcast icon"></i></h1>
                            <form action="Myclass.php">
                                <button type="submit" class="btn-getstarted btnHover1">Go to My class</button>
                            </form>
                        </div>

                    </div>
                    <div class="card grid-col-3" data-aos="fade-up">
                        <div class="box box2">
                            <p>Your smile will give you a positive countenance that will make people feel comfortable around you. </p>
                            <h1><i class="fas fa-calendar-alt"></i></h1>
                            <form action="Myclass.php">
                                <button type="submit" class="btn-getstarted btnHover2">Go to My class</button>
                            </form>
                        </div>
                        <div class="bg"></div>
                    </div>
                    <div class="card grid-col-3" data-aos="fade-left">
                        <div class="box box3">
                            <p>Before anything else, preparation is the key to success. </p>
                            <h1><i class="fa fa-microchip icon"></i></h1>
                            <form action="Myclass.php">
                                <button type="submit" class="btn-getstarted btnHover3">Go to My class</button>
                            </form>
                        </div>
                        <div class="bg"></div>
                    </div>
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
    
    const box1 = document.querySelector('.quotes .box.box1')
const box2 = document.querySelector('.quotes .box.box2')
const box3 = document.querySelector('.quotes .box.box3')
const btn1 = document.querySelector('.btnHover1')
const btn2 = document.querySelector('.btnHover2')
const btn3 = document.querySelector('.btnHover3')
box1.addEventListener("mouseover",function () {
    btn1.classList.remove('btnHover1')
})
box1.addEventListener("mouseout",function () {
    btn1.classList.add('btnHover1')
})
box2.addEventListener("mouseover",function () {
    btn2.classList.remove('btnHover2')
})
box2.addEventListener("mouseout",function () {
    btn2.classList.add('btnHover2')
})
box3.addEventListener("mouseover",function () {
    btn3.classList.remove('btnHover3')
})
box3.addEventListener("mouseout",function () {
    btn3.classList.add('btnHover3')
})
</script>

</html>