<?php
    session_start();
    if (!isset($_SESSION['idSchool'])) {
        # code...
    }else{
        include('config.php');
        $idstudent  = $_GET['idstudent'];
        $idschool = $_SESSION['idSchool'];
        $mon="";
        $tue="";
        $wed="";
        $thu="";
        $fri="";
        $sat="";
        $sun="";
        $sql = "SELECT tbl_group_student.stringAtten,tbl_class.subject,tbl_class.timeStart,tbl_class.timeOver,tbl_class.dayOfWeek FROM `tbl_class`,`tbl_group_student`,`tbl_student` WHERE tbl_group_student.id_class=tbl_class.id_class and tbl_group_student.id_student=tbl_student.id_student and tbl_student.id='$idstudent' and tbl_class.id_school=$idschool ";
        $old = mysqli_query($conn,$sql);
        $maxStr = 0;
        if(mysqli_num_rows($old)>0){
            while ($row = $old->fetch_assoc()) {
                if(strlen($row['stringAtten'])>$maxStr){
                    $maxStr=strlen($row['stringAtten']);
                }
                if ($row['dayOfWeek']=="Monday") {
                    $mon.='<div class="classTeacher" start="'.$row['timeStart'].'" over="'.$row['timeOver'].'" strAtte="'.$row['stringAtten'].'"  data-aos="fade-up">
                    <div class="classTeacher-content">

                        <span class="subject-name">'.$row['subject'].' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
                }else if($row['dayOfWeek']=="Tuesday"){
                    $tue.='<div class="classTeacher" start="'.$row['timeStart'].'" over="'.$row['timeOver'].'" strAtte="'.$row['stringAtten'].'"  data-aos="fade-up">
                    <div class="classTeacher-content">

                        <span class="subject-name">'.$row['subject'].' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
                }else if($row['dayOfWeek']=="Wednesday"){
                    $wed.='<div class="classTeacher" start="'.$row['timeStart'].'" over="'.$row['timeOver'].'" strAtte="'.$row['stringAtten'].'"  data-aos="fade-up">
                    <div class="classTeacher-content">

                        <span class="subject-name">'.$row['subject'].' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
                }else if($row['dayOfWeek']=="Thursday"){
                    $thu.='<div class="classTeacher" start="'.$row['timeStart'].'" over="'.$row['timeOver'].'" strAtte="'.$row['stringAtten'].'"  data-aos="fade-up">
                    <div class="classTeacher-content">

                        <span class="subject-name">'.$row['subject'].' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
                }else if($row['dayOfWeek']=="Friday"){
                    $fri.='<div class="classTeacher" start="'.$row['timeStart'].'" over="'.$row['timeOver'].'" strAtte="'.$row['stringAtten'].'"  data-aos="fade-up">
                    <div class="classTeacher-content">

                        <span class="subject-name">'.$row['subject'].' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
                }else if($row['dayOfWeek']=="Saturday"){
                    $sat.='<div class="classTeacher" start="'.$row['timeStart'].'" over="'.$row['timeOver'].'" strAtte="'.$row['stringAtten'].'"  data-aos="fade-up">
                    <div class="classTeacher-content">

                        <span class="subject-name">'.$row['subject'].' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
                }else if($row['dayOfWeek']=="Sunday"){
                    $sun.='<div class="classTeacher" start="'.$row['timeStart'].'" over="'.$row['timeOver'].'" strAtte="'.$row['stringAtten'].'"  data-aos="fade-up">
                    <div class="classTeacher-content">

                        <span class="subject-name">'.$row['subject'].' </span>
                        <span class="subject-time"> </span>
                    </div>
                </div>';
                }
            }
        }
        $opt="";
        for($i = 1;$i<=$maxStr;$i++){
            $opt.='<option value="'.$i.'">Week '.$i.'</option>';
        }
        $sql1="SELECT * FROM `schools` WHERE id='$idschool'";
        $old1=mysqli_query($conn,$sql1);
        $row1 = $old1->fetch_assoc();
        
        echo '<select name="" id="seclectWeek">
        '.$opt.'
    </select>
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
    



';
    }
