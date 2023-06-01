<?php
    session_start();
    if ($_SESSION['username']=='kong') {
        echo "用户名: ".$_SESSION['username'];
    } else  {
        header('location:demo001.html');
    }
?>