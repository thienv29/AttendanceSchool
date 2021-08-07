<?php
    session_start();
    include('config.php');
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
        $user  = $_SESSION['idStudent'];
    }
    $idclass = $_GET['id'];
    $sqls = "SELECT * FROM chat WHERE id_class = '$idclass'";
    $olds = mysqli_query($conn, $sqls);
    while ($rows = $olds->fetch_assoc()) {
        if ($rows['distinv2'] == $user) {
            echo '<div class="message-send message">

                    <div class="text"><span class="message-name">Tôi</span>' . $rows['stringChat'] . '<span class="message-time">' . $rows['time'] . '</span></div>


                </div>';
        } else {
            echo '<div class="message-recevie message">

                    <div class="text"><span class="message-name">' . $rows['name'] . '</span>' . $rows['stringChat'] . '<span class="message-time">' . $rows['time'] . '</span></div>

                </div>';
        }
    }
?>