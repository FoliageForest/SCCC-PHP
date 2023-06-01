<?php
// 启动会话
session_start();
if (isset($_POST['btn'])) {
    $username = trim($_POST['username']);
    $pwd = $_POST['pwd'];
    if ($username == '' || $pwd=='') {
        header('refresh:3;url=demo001.html');
        echo "3 秒跳转";
    } else if ($username!='kong' || $pwd!='123456') {
        header('refresh:3;url=demo001.html');
        echo "3 秒跳转";
    } else if ($username=='kong' && $pwd=='123456') {
        header('location:demo003.php');
    }
}
?>