<?php
    include('config.php');
    session_start();
    if (!isset($_SESSION['idSchool'])) {
        
    }else{
        $idstudent  = $_GET['idstudent'];
        $idschool = $_SESSION['idSchool'];
        $sql = "SELECT * FROM `tbl_student` WHERE id='$idstudent' and id_school = '$idschool'";
        $old =mysqli_query($conn,$sql);
        if (mysqli_num_rows($old)>0) {
            $row = $old->fetch_assoc();
            $fullname = $row['fisrtName'].' '.$row['lastName'];
            $gender = $row['gender'];
            $email = $row['email'];
            $idst = $row['id_student'];
        }
        $string = "";
        $sql2="SELECT stringAtten FROM `tbl_group_student` WHERE id_student = '$idst'";
        $old2 = mysqli_query($conn,$sql2);
        if (mysqli_num_rows($old)>0) {
            while ($row2= $old2->fetch_assoc()) {
                $string.=$row2['stringAtten'];
            }
        }
        $percent = substr_count($string, 'x')/strlen($string)*100;
        settype($percent, "integer");
        echo '<div class="studentInfo-item studentInfo-item-left ">
        <div class="studentInfo-item-ava">
            <img src="images/student.png" alt="" srcset="">
        </div>

    </div>
    <div class="studentInfo-item studentInfo-item-right">

        <div class="studentInfo-item-right-name">
            Full name: '.$fullname.'
        </div>
        <div class="studentInfo-item-right-gender">
            Gender: '.$gender.'
        </div>
        <div class="studentInfo-item-right-id">
            ID: '.$idstudent.'
        </div>
        <div class="studentInfo-item-right-email">
            Email: '.$email.'
        </div>
    </div>
    <div class="studentInfo-item studentInfo-item-last ">
        <div class="countAttendace">
            <div class="course-percent">
                <svg height="100" width="100">
                    <circle class="course-percent-circle"  cx="50" cy="50" r="35" stroke="gray" stroke-width="8" fill="transparent"></circle>
                    <circle class="course-percent-circle" style="stroke-dasharray: 220; stroke-dashoffset: calc(220 - (220*'.$percent.')/100); " cx="50" cy="50" r="35" stroke="#a3d5e0" stroke-width="8" fill="transparent" style="stroke-dasharray: 220; stroke-dashoffset: 0;"></circle>

                </svg>
                <span class="course-percent-text" id="countdown">'.$percent.'%</span>
            </div>
            <span>Diligence</span>

        </div>

    </div>
    <script>
    const a = document.querySelector(".countAttendace .course-percent-circle:nth-child(2)")
    console.log(a)
        a.style.strokeDashoffset="220"
</script>';
        
    }
