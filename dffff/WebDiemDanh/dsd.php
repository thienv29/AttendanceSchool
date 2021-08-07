My Class 0) { while ($row = $old->fetch_assoc()) { array_push($listIdClass, $row['id_class']); $temp = ""; if ($countClass == 0) { $temp = "active"; } $row['timeStart'] = substr($row['timeStart'], 0, 5); $row['timeOver'] = substr($row['timeOver'], 0, 5); echo '
Export File Excel 
Full Name 
ID 
Gender 
Attendance '; $sql = 'SELECT tbl_student.lastName,tbl_student.fisrtName,tbl_student.gender,tbl_student.id,tbl_student.id_student,tbl_group_student.stringAtten FROM tbl_student,tbl_group_student WHERE tbl_student.id_student=tbl_group_student.id_student and tbl_group_student.id_class=' . $listIdClass[$i]; $old = mysqli_query($conn, $sql); if (mysqli_num_rows($old) > 0) { $count = 0; while ($row = $old->fetch_assoc()) { $percent = substr_count($row['stringAtten'], 'x') / strlen($row['stringAtten']) * 100; settype($percent, "integer"); echo '
' . $row['fisrtName'] . ' ' . $row['lastName'] . ' 
' . $row['id'] . ' 
' . $row['gender'] . ' 
' . $percent . '% 
'; } } } else if ($i > 0) { echo '
'; $sql2 = 'SELECT tbl_student.lastName,tbl_student.fisrtName,tbl_student.gender,tbl_student.id,tbl_student.id_student,tbl_group_student.stringAtten FROM tbl_student,tbl_group_student WHERE tbl_student.id_student=tbl_group_student.id_student and tbl_group_student.id_class=' . $listIdClass[$i]; $old2 = mysqli_query($conn, $sql2); if (mysqli_num_rows($old2) > 0) { while ($row = $old2->fetch_assoc()) { $percent = substr_count($row['stringAtten'], 'x') / strlen($row['stringAtten']) * 100; settype($percent, "integer"); echo '
' . $row['fisrtName'] . ' ' . $row['lastName'] . ' 
' . $row['id'] . ' 
' . $row['gender'] . ' 
' . $percent . '% 
'; } } } echo '
'; } ?> 
Get in touch 
0523923xxx 
thienv29@gmail.com 
HCM city 
Feedback 
Email 
Name 
Mesage Send 
Take care of customers 
Help center 
Shopping guide 
Tickid Mall 
TICKID 
About Tickid 
Recruitment 
Terms 
Contact us 
Facbook 
Instagram 
Twiter 
© 2020 DevTools. Tất cả các quyền được bảo lưu. 