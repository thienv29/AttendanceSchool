<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}
include('getFullName.php');
$err="";
$err2="";
if(!isset($_POST['oldpass'])&&!isset($_POST['newpass'])){
    $err="";
    $err2="";
}else{
    $Email = $_SESSION['user'];
include('config.php');
$oldpass = $_POST['oldpass'];
$oldpass = md5($oldpass);
$newpass = $_POST['newpass'];
$new2pass = md5($newpass);


$sql = "SELECT * FROM `tbl_teacher` WHERE email_teacher='$Email' AND password = '$oldpass'";
$old = mysqli_query($conn, $sql);
if (mysqli_num_rows($old) == 0) {
    $err = "sai mat khau";
    $err2="";
}else if(mysqli_num_rows($old) == 1 && ($new2pass==$oldpass ) ){

    $err="";
    $err2="Mật khẩu mới phải khác mật khẩu cũ";
}else if(mysqli_num_rows($old) == 1 && ($new2pass!=$oldpass )){
    $sql="UPDATE `tbl_teacher` SET `password`='$new2pass' WHERE email_teacher='$Email'";
    $old = mysqli_query($conn, $sql);
    header('location:index.php');
}
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

    <link rel="icon" href="images/attendance-icon-7.jpg">
</head>

<body>
<header class="header grid-fullwidth gridrow" >
        <div class="headerContainer gridrow grid">
            <div class="iconHeader grid-col-7 gridrow">
                <div class="iconHeaderImg">
                    <a href="home.php"><img src="images/Logo.png" alt="" srcset=""></a>
                </div>

            </div>
            <div class="menuHeader grid-col-5">
                <ul class="gridrow">
                    <li class="unline"><a href="index.php">Home</a></li>
                    <li class="unline"><a href="Myclass.php">My class</a></li>
                    <li class="unline menuUser">

                        <div class="logged-user-coin">

                            <?php echo $FullName ?>

                        </div>
                        <i class="logged-icon fas fa-chevron-down">
                            <ul class="user-menu">
                                <li class="user-option-item">
                                    <a href="ChangePass.php" class="logout">Change Password</a>

                                </li>

                                <li class="user-option-item">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <a href="logout.php" class="logout">Logout</a>
                                </li>
                            </ul>
                        </i>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="bodyChangePass grid-fullwidth">
    <div class="asdasdasd s">
       
        <div class="changePass gridrow grid-fullwidth">
            <div class="grid-col-4">
                <form action="ChangePass.php" method="post" class="form form-changePass">
                    <span>Change Password</span>
                    <div class="feedback-email form-div">
                        <input class="input" type="password" name="oldpass" id="email" required>
                        <label for="user" class="form-label">
                            <span class="label-content">Old Password</span>
                        </label>
                        <span class="input-error"><?php echo $err ?></span>

                    </div>
                    <div class="feedback-email form-div">
                        <input class="input" type="password" name="newpass" id="email" required>
                        <label for="user" class="form-label">
                            <span class="label-content">New Password</span>
                        </label>
                        <span class="input-error"><?php echo $err2 ?></span>

                    </div>
                    <button type="submit" class="btn-getstarted colorA">Save</button>
                </form>
            </div>
        </div>
        
    </div>
        

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
                <form action="feedback" class="form" id="formfeedback">
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
    <script src="js/header.js"></script>
</body>

</html>