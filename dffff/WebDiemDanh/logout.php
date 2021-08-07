<?php
    session_start();
    session_unset('user');
    session_destroy();
    header('location:index.php');
?>