<?php
$errE = "";
    if (!isset($_POST['emailCheck'])) {
        header("location:login.php?errE=$errE");
    }else{
        include('config.php');
        $Email = $_POST['emailCheck'];
        $sql = "SELECT * FROM `tbl_teacher` WHERE email_teacher='$Email'" ;
        $old = mysqli_query($conn,$sql);
        

        if(mysqli_num_rows($old)>0){
            $rand = rand();
            $randMD = md5($rand);

            $sql="UPDATE `tbl_teacher` SET `password`='$randMD' WHERE email_teacher='$Email'";
            $old = mysqli_query($conn, $sql);
            require_once('PHPMailer/PHPMailerAutoload.php');
            $mail=new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure ='ssl'; 
            $mail->Host = 'smtp.gmail.com';
            $mail->Port ='465';
            $mail->isHTML();
            $mail->Username = 'attendanceservicepass@gmail.com';
            $mail->Password = '0948040243x';
            $mail->SetFrom('no-reply@howcode.org');
            $mail->Subject = 'RESET PASSWORD ATTENDANCE';
            $mail->CharSet = "UTF-8";
            $mail->Body = "Your password is $rand"; 
            $mail->AddAddress("$Email");
            $mail->Send();
            $errE="Sent successfully";
            $ssE = "colorGreen";
            header("location:login.php?errE=$errE&ssE=$ssE&flex=dis");
            
        } else{
            $errE="Email is not exist!";
            header("location:login.php?errE=$errE");
        }
    }
