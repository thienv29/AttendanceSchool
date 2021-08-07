<?php
    session_start();
    include('config.php');
    $idclass = $_GET['idclass'];
    function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    $rand = generateRandomString(10);
    $sqlQ = "SELECT * FROM `qrcode` WHERE 1";
    $old = mysqli_query($conn,$sqlQ);
    $arr = array();
    while ($row = $old->fetch_assoc()){
        array_push($arr, $row['stringrandom']);
    }
    function boo(array $arr,string $rand)
    {
        foreach($arr as &$value){
            if ($rand==$value) {
                return true;
            }
        }
        return false;
    }
    while(boo($arr,$rand)){
        $rand = generateNewString(20);
    }
    $sql = "UPDATE `qrcode` SET `stringrandom`= '$rand' WHERE `id_class`= '$idclass'";
    mysqli_query($conn,$sql);
    $link  = "newfolder/student.php?id=".$rand;
    
    include "createQrcode.php";
    $qr = new QR_BarCode(); 
    $qr->text($link);
    $s = $qr->qrCode(500,'images/qr-ima'.$idclass.'.png');
    while ( $s<2000) {
        $s = $qr->qrCode(500,'images/qr-ima'.$idclass.'.png');
    }
    echo $s;
    

    
?>